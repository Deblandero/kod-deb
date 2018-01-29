<?php

$flexbox_parent = [
    "display: flex;" => "Va coller les éléments enfant les un à coté des autres. Il ne va pas les disposer à la ligne si il y en a de trop par rapport à la largeur de l'écran. Il va les placer en dehors de l'écran, sur la même ligne.",
    "display-direction: row;" => "Affichage des enfants sur une ligne de gauche à droite.",
    "flex-direction: row-reverse;" => "Idem mais dans le sens inverse.",
    "flex-direction: column;" => "Affichange des enfants les un en dessous des autres, automatiquement il élargit les enfants a une largeur 100%.",
    "flex-direction; column-reverse;" => "idem en sens inverse.",
    "flex-wrap: wrap;" => "Il affiche les enfants à la ligne dé qu'il n'y a plus de place pour les enfants suivant au niveau de la largeur de l'écran.",
    "flex-wrap: wrap-reverse;" => "idem en sens inverse.",
    "----------" => "",
    "Propriété jumelée:"=>"On peut renseigner ces deux valeurs en UNE SEUL.",
    "----------" => "",
    "flex-flow:" => "row (1) wrap (2);",
    "1=>" => "pour la partie flex-direction",
    "2=>" => "pour la partie flex-wrap",
    "----------" => "Comment espacer les enfants les un des autres (alignement horizontale, axe des X):",
    "justify-content: center;" => "les enfants vont rester collé les un aux autres mais ils seront centré par rapport au container parent.",
    "justify-content: flex-start;" => "les enfants seront collé au début du container (à gauche).",
    "justify-content: flex-end;" => "idem mais ça les collera à droite.",
    "justify-content: space-around;" => "Mettre des espaces identiques entre chaque enfants pour tous les rentrer.",
    "justify-content: space-between;" => "idem mais pas sur les extrémités gauche et droite.",
    "----------" => "Comment espacer les enfants les un des autres (alignement verticale, axe des Y):",
    "align-items: stretch;" => "(valeur par défault) cela fait étendre verticalement tous les enfants pour qu'ils rentrent sur la hauteur totale du parent.",
    "align-items: flex-start;" => "aligne les enfants par rapport à la partie supérieur du container parent.",
    "align-items: flex-end;" => "idem mais par rapport à la ligne du bas.",
    "align-items: center;" => "centre les enfants sur la hauteur du container parent (laisse un espace entre les lignes si il y a trop d'enfants pour la largeur de l'écran).",
    "align-content: stretch;" => "A UTILISER SI ON A PLUSIEUR LIGNES DANS UNE MEME HAUTEUR. Un peux le meme role que le justify-content mais pour la partie vertical.",
    "align-content: flex-start;" => "Aligne tous les enfants et les colles par rapport au dessus du container.",
    "align-content: flex-end;" => "idem mais par rapport au bas.",
    "align-content: center;" => "aligne les enfants sur la hauteur du container mais les colles ensemble et laisse le même espace par rapport au dessus et au dessous.",
    "align-content: space-around;" => "placera un espace entre chaque enfants sur la partie verticale.",
    "align-content: space-between;" => "idem mais pas en haut ni en bas.",
];

$flexbox_enfant = [
    "flex-grow:" => "(param1) Indique comment l'enfant doit s'agrandire par rapport à l'espace restant de la page. TOUS LES ELEMENTS OCCUPERONT TOUT L'ESPACE, donc plus d'espace entres eux.",
    "flex-grow: 2;" => "l'enfant ciblé prendra 2 fois l'espace disponible par éléments (utile lors de l'utilisation de STRECH avec align-items, et align-content.",
    "flex-shrink:" => "(param2) Si on a plus assez d'espace pour un enfant, on lui place un flex-shrink pour le réduir à l'espace restant.",
    "flex-basis:" => "(param3) Donne l'info en forcé à shrink et grow sur les espaces à occuper.",
    "flex-basis: 50%; " => "Il va allouer la moitié de la page pour faire travailler grow ou shrink. Avec shrink par ex, l'enfant sera étendu pour remplir la moitié de l'écran en largeur.",
    "----------" => "",
    "Propriété jumelée:"=>"On peut renseigner ces deux valeurs en UNE SEUL.",
    "----------" => "",
    "flex:(param1) (param2) (param3);" => "",

];

   
   
   
   
   
   
   
