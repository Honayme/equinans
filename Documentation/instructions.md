Modifications à apporter au fichier Services.blade
1. Mise à jour de la section "Galop" (div avec id="galop")

Image Poney :

Dans la première div ou figure, remplacer la source de l'image existante par le chemin menant à photoponer qui se trouve dans votre storage.


Image Cheval :

Dans la seconde div ou figure, remplacer la source de l'image existante par le chemin menant à photo cheval qui se trouve dans votre storage.



2. Contenu textuel (div de classe col-lg-6)

Dans la deuxième colonne du layout, insérez le texte suivant pour présenter l'affiliation à la FFE et le passage des Galops :

Passez vos Galops® avec Equinance
Fier partenaire de la Fédération Française d'Équitation (FFE), Equinance est un centre agréé pour l'organisation et la validation des examens fédéraux des Galops®. Que vous soyez cavalier à poney ou à cheval, notre équipe d'enseignants diplômés vous accompagne dans votre progression pour vous préparer et vous présenter aux différents niveaux. Profitez d'un encadrement de qualité pour certifier vos compétences et atteindre vos objectifs.



3. Remplissage des sections et liens

Section "Galop Poney" :

La figure (ou div) galop-poney doit être complétée avec les informations spécifiques au passage des galops à poney.
Cette section doit contenir un lien (<a>) qui redirige vers la route correspondant au passage des galops à poney.


Section "Galop Cheval" :

La div galop-cheval doit être complétée avec les informations spécifiques au passage des galops à cheval.
Cette section doit contenir un lien (<a>) qui redirige vers la route correspondant au passage des galops à cheval.



4. Suppression d'élément

Supprimer intégralement la div nommée galop-ctastart ainsi que tout son contenu.


En résumé :

Changer l'image 1 pour photoponer.
Changer l'image 2 pour photo cheval.
Ajouter le texte sur la FFE et les Galops.
Remplir les sections "Galop Poney" et "Galop Cheval".
Lier la section "Galop Poney" à la bonne route.
Lier la section "Galop Cheval" à la bonne route.
Supprimer la div galop-ctastart.


