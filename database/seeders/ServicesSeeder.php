<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $xmlPath = base_path('services.xml');

        if (!file_exists($xmlPath)) {
            $this->command->error("Le fichier services.xml n'existe pas à la racine du projet.");
            return;
        }

        $xml = simplexml_load_string(file_get_contents($xmlPath));

        if (!$xml) {
            $this->command->error("Impossible de parser le fichier XML.");
            return;
        }

        $index = 0;
        foreach ($xml->services->service as $serviceXml) {
            $index++;
            $serviceData = $this->parseService($serviceXml, $index);

            Service::updateOrCreate(
                ['slug' => $serviceData['slug']],
                $serviceData
            );

            $this->command->info("Service importé : " . $serviceData['title']);
        }

        $this->command->info("Import des services terminé !");
    }

    /**
     * Parse un élément service du XML
     */
    private function parseService($serviceXml, $order)
    {
        $title = (string) $serviceXml['title'];
        $introduction = isset($serviceXml->introduction) ? (string) $serviceXml->introduction : null;

        // Parse le contenu complexe
        $content = [];

        // Description
        if (isset($serviceXml->description)) {
            $content['description'] = $this->parseDescription($serviceXml->description);
        }

        // Sub sections
        if (isset($serviceXml->sub_section)) {
            $content['sub_sections'] = $this->parseSubSections($serviceXml->sub_section);
        }

        // Header (pour laser game)
        if (isset($serviceXml->header)) {
            $content['header'] = $this->parseHeader($serviceXml->header);
        }

        // Details
        if (isset($serviceXml->details)) {
            $content['details'] = $this->parseDetails($serviceXml->details);
        }

        // Footer
        if (isset($serviceXml->footer)) {
            $content['footer'] = $this->parseFooter($serviceXml->footer);
        }

        // Center info (pour stages)
        if (isset($serviceXml->center_info)) {
            $content['center_info'] = $this->parseCenterInfo($serviceXml->center_info);
        }

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'introduction' => $introduction,
            'content' => $content,
            'order' => $order,
            'is_active' => true,
        ];
    }

    private function parseDescription($description)
    {
        $result = [];

        if (isset($description->sub_title)) {
            $result['sub_title'] = (string) $description->sub_title;
        }

        if (isset($description->paragraph)) {
            $result['paragraphs'] = [];
            foreach ($description->paragraph as $paragraph) {
                $result['paragraphs'][] = (string) $paragraph;
            }
        }

        return $result;
    }

    private function parseSubSections($subSections)
    {
        $result = [];

        foreach ($subSections as $subSection) {
            $section = [
                'title' => (string) $subSection['title'],
                'content' => []
            ];

            // Paragraphes
            if (isset($subSection->paragraph)) {
                $section['content']['paragraphs'] = [];
                foreach ($subSection->paragraph as $paragraph) {
                    $section['content']['paragraphs'][] = (string) $paragraph;
                }
            }

            // Emphasis
            if (isset($subSection->emphasis)) {
                $section['content']['emphasis'] = (string) $subSection->emphasis;
            }

            // Note
            if (isset($subSection->note)) {
                $section['content']['note'] = (string) $subSection->note;
            }

            // Formulas
            if (isset($subSection->formula)) {
                $section['content']['formulas'] = $this->parseFormulas($subSection->formula);
            }

            // Items
            if (isset($subSection->item)) {
                $section['content']['items'] = $this->parseItems($subSection->item);
            }

            // Detail
            if (isset($subSection->detail)) {
                $section['content']['details'] = [];
                foreach ($subSection->detail as $detail) {
                    $section['content']['details'][] = (string) $detail;
                }
            }

            $result[] = $section;
        }

        return $result;
    }

    private function parseFormulas($formulas)
    {
        $result = [];

        foreach ($formulas as $formula) {
            $formulaData = [
                'name' => (string) $formula['name'],
                'content' => []
            ];

            if (isset($formula->paragraph)) {
                $formulaData['content']['paragraphs'] = [];
                foreach ($formula->paragraph as $paragraph) {
                    $formulaData['content']['paragraphs'][] = (string) $paragraph;
                }
            }

            if (isset($formula->detail)) {
                $formulaData['content']['details'] = [];
                foreach ($formula->detail as $detail) {
                    $formulaData['content']['details'][] = (string) $detail;
                }
            }

            $result[] = $formulaData;
        }

        return $result;
    }

    private function parseItems($items)
    {
        $result = [];

        foreach ($items as $item) {
            $itemData = [];

            if (isset($item['name'])) {
                $itemData['name'] = (string) $item['name'];
            }

            if (isset($item->title)) {
                $itemData['title'] = (string) $item->title;
            }

            if (isset($item->detail)) {
                $itemData['detail'] = (string) $item->detail;
            }

            if (isset($item->text)) {
                $itemData['text'] = (string) $item->text;
            }

            if (isset($item->sub_detail)) {
                $itemData['sub_details'] = [];
                foreach ($item->sub_detail as $subDetail) {
                    $itemData['sub_details'][] = (string) $subDetail;
                }
            }

            if (isset($item->translation)) {
                $itemData['translations'] = [];
                foreach ($item->translation as $translation) {
                    $itemData['translations'][(string) $translation['lang']] = (string) $translation;
                }
            }

            // Attribut simple (pour certains items)
            if (empty($itemData) && (string)$item != '') {
                $itemData['content'] = (string) $item;
            }

            $result[] = $itemData;
        }

        return $result;
    }

    private function parseHeader($header)
    {
        $result = [];

        if (isset($header->highlight)) {
            $result['highlight'] = [
                'text' => (string) $header->highlight,
                'type' => (string) $header->highlight['type']
            ];
        }

        if (isset($header->main_title)) {
            $result['main_title'] = (string) $header->main_title;
        }

        if (isset($header->subtitle)) {
            $result['subtitle'] = (string) $header->subtitle;
        }

        if (isset($header->description)) {
            $result['description'] = (string) $header->description;
        }

        return $result;
    }

    private function parseDetails($details)
    {
        $result = [];

        foreach ($details->section as $section) {
            $sectionData = [
                'name' => (string) $section['name'],
                'paragraphs' => []
            ];

            if (isset($section->paragraph)) {
                foreach ($section->paragraph as $paragraph) {
                    $sectionData['paragraphs'][] = (string) $paragraph;
                }
            }

            $result[] = $sectionData;
        }

        return $result;
    }

    private function parseFooter($footer)
    {
        $result = [];

        if (isset($footer->call_to_action)) {
            $result['call_to_actions'] = [];
            foreach ($footer->call_to_action as $cta) {
                $result['call_to_actions'][] = (string) $cta;
            }
        }

        return $result;
    }

    private function parseCenterInfo($centerInfo)
    {
        $result = [];

        if (isset($centerInfo->sub_section)) {
            foreach ($centerInfo->sub_section as $subSection) {
                $section = [
                    'title' => (string) $subSection['title'],
                    'details' => []
                ];

                if (isset($subSection->detail)) {
                    foreach ($subSection->detail as $detail) {
                        $section['details'][] = (string) $detail;
                    }
                }

                $result['sub_sections'][] = $section;
            }
        }

        if (isset($centerInfo->identity)) {
            $result['identity'] = [
                'name' => (string) $centerInfo->identity->name,
                'tagline' => (string) $centerInfo->identity->tagline,
                'summary' => (string) $centerInfo->identity->summary,
            ];
        }

        if (isset($centerInfo->contact)) {
            $result['contact'] = [
                'name' => (string) $centerInfo->contact->name,
                'address' => (string) $centerInfo->contact->address,
                'phone' => (string) $centerInfo->contact->phone,
            ];
        }

        if (isset($centerInfo->labels)) {
            $result['labels'] = [];
            foreach ($centerInfo->labels->label as $label) {
                $result['labels'][] = (string) $label;
            }
        }

        return $result;
    }
}
