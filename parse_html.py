#!/usr/bin/env python3
"""
Script pour extraire le contenu principal (body) des fichiers HTML
en supprimant le header et le footer répétitifs.
"""

import os
import re

# Dossier contenant les fichiers HTML
views_dir = r"C:\laragon\www\equinans\resources\views"

# Liste des fichiers à traiter
html_files = [
    "about.html",
    "contact.html",
    "faqs.html",
    "image-gallery.html",
    "service-single.html",
    "services.html",
    "team-single.html",
    "team.html",
    "testimonials.html"
]

def extract_main_content(file_path):
    """Extrait le contenu principal d'un fichier HTML."""
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Trouver le début du contenu principal (après <!-- Header End -->)
    header_end_pattern = r'<!-- Header End -->\s*'
    header_match = re.search(header_end_pattern, content)

    if not header_match:
        print(f"⚠️  Header end not found in {os.path.basename(file_path)}")
        return None

    start_index = header_match.end()

    # Trouver le début du footer (avant <!-- Footer Start -->)
    footer_start_pattern = r'\s*<!-- Footer Start -->'
    footer_match = re.search(footer_start_pattern, content[start_index:])

    if not footer_match:
        print(f"⚠️  Footer start not found in {os.path.basename(file_path)}")
        return None

    end_index = start_index + footer_match.start()

    # Extraire le contenu principal
    main_content = content[start_index:end_index]

    # Nettoyer les espaces inutiles au début et à la fin
    main_content = main_content.strip()

    return main_content

def process_file(filename):
    """Traite un fichier HTML."""
    file_path = os.path.join(views_dir, filename)

    if not os.path.exists(file_path):
        print(f"❌ File not found: {filename}")
        return False

    print(f"Processing {filename}...")

    main_content = extract_main_content(file_path)

    if main_content is None:
        return False

    # Écrire le contenu extrait dans le fichier
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(main_content)

    print(f"✅ {filename} processed successfully")
    return True

def main():
    """Fonction principale."""
    print("=" * 60)
    print("HTML Parser - Extraction du contenu principal")
    print("=" * 60)
    print()

    success_count = 0
    fail_count = 0

    for filename in html_files:
        if process_file(filename):
            success_count += 1
        else:
            fail_count += 1
        print()

    print("=" * 60)
    print(f"Résultat: {success_count} fichiers traités avec succès, {fail_count} échecs")
    print("=" * 60)

if __name__ == "__main__":
    main()
