<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme
 * @subpackage adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University) 
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$settings = null;
require_once(__DIR__.'/libs/admin_confightmleditor.php');
require_once(__DIR__.'/lib.php');
defined('MOODLE_INTERNAL') || die;

$fontlist = array(
'default' => "default",
'ABeeZee' => "ABeeZee",
'Abel' => "Abel",
'Abril Fatface' => "Abril Fatface",
'Aclonica' => "Aclonica",
'Acme' => "Acme",
'Actor' => "Actor",
'Adamina' => "Adamina",
'Advent Pro' => "Advent Pro",
'Aguafina Script' => "Aguafina Script",
'Akronim' => "Akronim",
'Aladin' => "Aladin",
'Aldrich' => "Aldrich",
'Alef' => "Alef",
'Alegreya' => "Alegreya",
'Alegreya Sans' => "Alegreya Sans",
'Alegreya Sans SC' => "Alegreya Sans SC",
'Alegreya SC' => "Alegreya SC",
'Alex Brush' => "Alex Brush",
'Alfa Slab One' => "Alfa Slab One",
'Alice' => "Alice",
'Alike' => "Alike",
'Alike Angular' => "Alike Angular",
'Allan' => "Allan",
'Allerta' => "Allerta",
'Allerta Stencil' => "Allerta Stencil",
'Allura' => "Allura",
'Almendra' => "Almendra",
'Almendra Display' => "Almendra Display",
'Almendra SC' => "Almendra SC",
'Amarante' => "Amarante",
'Amaranth' => "Amaranth",
'Amatic SC' => "Amatic SC",
'Amethysta' => "Amethysta",
'Amiri' => "Amiri",
'Amita' => "Amita",
'Anaheim' => "Anaheim",
'Andada' => "Andada",
'Andika' => "Andika",
'Angkor' => "Angkor",
'Annie Use Your Telescope' => "Annie Use Your Telescope",
'Anonymous Pro' => "Anonymous Pro",
'Antic' => "Antic",
'Antic Didone' => "Antic Didone",
'Antic Slab' => "Antic Slab",
'Anton' => "Anton",
'Arapey' => "Arapey",
'Arbutus' => "Arbutus",
'Arbutus Slab' => "Arbutus Slab",
'Architects Daughter' => "Architects Daughter",
'Archivo Black' => "Archivo Black",
'Archivo Narrow' => "Archivo Narrow",
'Arimo' => "Arimo",
'Arizonia' => "Arizonia",
'Armata' => "Armata",
'Artifika' => "Artifika",
'Arvo' => "Arvo",
'Arya' => "Arya",
'Asap' => "Asap",
'Asar' => "Asar",
'Asset' => "Asset",
'Astloch' => "Astloch",
'Asul' => "Asul",
'Atomic Age' => "Atomic Age",
'Aubrey' => "Aubrey",
'Audiowide' => "Audiowide",
'Autour One' => "Autour One",
'Average' => "Average",
'Average Sans' => "Average Sans",
'Averia Gruesa Libre' => "Averia Gruesa Libre",
'Averia Libre' => "Averia Libre",
'Averia Sans Libre' => "Averia Sans Libre",
'Averia Serif Libre' => "Averia Serif Libre",
'Bad Script' => "Bad Script",
'Balthazar' => "Balthazar",
'Bangers' => "Bangers",
'Basic' => "Basic",
'Battambang' => "Battambang",
'Baumans' => "Baumans",
'Bayon' => "Bayon",
'Belgrano' => "Belgrano",
'Belleza' => "Belleza",
'BenchNine' => "BenchNine",
'Bentham' => "Bentham",
'Berkshire Swash' => "Berkshire Swash",
'Bevan' => "Bevan",
'Bigelow Rules' => "Bigelow Rules",
'Bigshot One' => "Bigshot One",
'Bilbo' => "Bilbo",
'Bilbo Swash Caps' => "Bilbo Swash Caps",
'Biryani' => "Biryani",
'Bitter' => "Bitter",
'Black Ops One' => "Black Ops One",
'Bokor' => "Bokor",
'Bonbon' => "Bonbon",
'Boogaloo' => "Boogaloo",
'Bowlby One' => "Bowlby One",
'Bowlby One SC' => "Bowlby One SC",
'Brawler' => "Brawler",
'Bree Serif' => "Bree Serif",
'Bubblegum Sans' => "Bubblegum Sans",
'Bubbler One' => "Bubbler One",
'Buda' => "Buda",
'Buenard' => "Buenard",
'Butcherman' => "Butcherman",
'Butterfly Kids' => "Butterfly Kids",
'Cabin' => "Cabin",
'Cabin Condensed' => "Cabin Condensed",
'Cabin Sketch' => "Cabin Sketch",
'Caesar Dressing' => "Caesar Dressing",
'Cagliostro' => "Cagliostro",
'Calligraffitti' => "Calligraffitti",
'Cambay' => "Cambay",
'Cambo' => "Cambo",
'Candal' => "Candal",
'Cantarell' => "Cantarell",
'Cantata One' => "Cantata One",
'Cantora One' => "Cantora One",
'Capriola' => "Capriola",
'Cardo' => "Cardo",
'Carme' => "Carme",
'Carrois Gothic' => "Carrois Gothic",
'Carrois Gothic SC' => "Carrois Gothic SC",
'Carter One' => "Carter One",
'Catamaran' => "Catamaran",
'Caudex' => "Caudex",
'Caveat' => "Caveat",
'Caveat Brush' => "Caveat Brush",
'Cedarville Cursive' => "Cedarville Cursive",
'Ceviche One' => "Ceviche One",
'Changa One' => "Changa One",
'Chango' => "Chango",
'Chau Philomene One' => "Chau Philomene One",
'Chela One' => "Chela One",
'Chelsea Market' => "Chelsea Market",
'Chenla' => "Chenla",
'Cherry Cream Soda' => "Cherry Cream Soda",
'Cherry Swash' => "Cherry Swash",
'Chewy' => "Chewy",
'Chicle' => "Chicle",
'Chivo' => "Chivo",
'Chonburi' => "Chonburi",
'Cinzel' => "Cinzel",
'Cinzel Decorative' => "Cinzel Decorative",
'Clicker Script' => "Clicker Script",
'Coda' => "Coda",
'Coda Caption' => "Coda Caption",
'Codystar' => "Codystar",
'Combo' => "Combo",
'Comfortaa' => "Comfortaa",
'Coming Soon' => "Coming Soon",
'Concert One' => "Concert One",
'Condiment' => "Condiment",
'Content' => "Content",
'Contrail One' => "Contrail One",
'Convergence' => "Convergence",
'Cookie' => "Cookie",
'Copse' => "Copse",
'Corben' => "Corben",
'Courgette' => "Courgette",
'Cousine' => "Cousine",
'Coustard' => "Coustard",
'Covered By Your Grace' => "Covered By Your Grace",
'Crafty Girls' => "Crafty Girls",
'Creepster' => "Creepster",
'Crete Round' => "Crete Round",
'Crimson Text' => "Crimson Text",
'Croissant One' => "Croissant One",
'Crushed' => "Crushed",
'Cuprum' => "Cuprum",
'Cutive' => "Cutive",
'Cutive Mono' => "Cutive Mono",
'Damion' => "Damion",
'Dancing Script' => "Dancing Script",
'Dangrek' => "Dangrek",
'Dawning of a New Day' => "Dawning of a New Day",
'Days One' => "Days One",
'Dekko' => "Dekko",
'Delius' => "Delius",
'Delius Swash Caps' => "Delius Swash Caps",
'Delius Unicase' => "Delius Unicase",
'Della Respira' => "Della Respira",
'Denk One' => "Denk One",
'Devonshire' => "Devonshire",
'Dhurjati' => "Dhurjati",
'Didact Gothic' => "Didact Gothic",
'Diplomata' => "Diplomata",
'Diplomata SC' => "Diplomata SC",
'Domine' => "Domine",
'Donegal One' => "Donegal One",
'Doppio One' => "Doppio One",
'Dorsa' => "Dorsa",
'Dosis' => "Dosis",
'Dr Sugiyama' => "Dr Sugiyama",
'Droid Sans' => "Droid Sans",
'Droid Sans Mono' => "Droid Sans Mono",
'Droid Serif' => "Droid Serif",
'Duru Sans' => "Duru Sans",
'Dynalight' => "Dynalight",
'Eagle Lake' => "Eagle Lake",
'Eater' => "Eater",
'EB Garamond' => "EB Garamond",
'Economica' => "Economica",
'Eczar' => "Eczar",
'Ek Mukta' => "Ek Mukta",
'Electrolize' => "Electrolize",
'Elsie' => "Elsie",
'Elsie Swash Caps' => "Elsie Swash Caps",
'Emblema One' => "Emblema One",
'Emilys Candy' => "Emilys Candy",
'Engagement' => "Engagement",
'Englebert' => "Englebert",
'Enriqueta' => "Enriqueta",
'Erica One' => "Erica One",
'Esteban' => "Esteban",
'Euphoria Script' => "Euphoria Script",
'Ewert' => "Ewert",
'Exo' => "Exo",
'Exo 2' => "Exo 2",
'Expletus Sans' => "Expletus Sans",
'Fanwood Text' => "Fanwood Text",
'Fascinate' => "Fascinate",
'Fascinate Inline' => "Fascinate Inline",
'Faster One' => "Faster One",
'Fasthand' => "Fasthand",
'Fauna One' => "Fauna One",
'Federant' => "Federant",
'Federo' => "Federo",
'Felipa' => "Felipa",
'Fenix' => "Fenix",
'Finger Paint' => "Finger Paint",
'Fira Mono' => "Fira Mono",
'Fira Sans' => "Fira Sans",
'Fjalla One' => "Fjalla One",
'Fjord One' => "Fjord One",
'Flamenco' => "Flamenco",
'Flavors' => "Flavors",
'Fondamento' => "Fondamento",
'Fontdiner Swanky' => "Fontdiner Swanky",
'Forum' => "Forum",
'Francois One' => "Francois One",
'Freckle Face' => "Freckle Face",
'Fredericka the Great' => "Fredericka the Great",
'Fredoka One' => "Fredoka One",
'Freehand' => "Freehand",
'Fresca' => "Fresca",
'Frijole' => "Frijole",
'Fruktur' => "Fruktur",
'Fugaz One' => "Fugaz One",
'Gabriela' => "Gabriela",
'Gafata' => "Gafata",
'Galdeano' => "Galdeano",
'Galindo' => "Galindo",
'Gentium Basic' => "Gentium Basic",
'Gentium Book Basic' => "Gentium Book Basic",
'Geo' => "Geo",
'Geostar' => "Geostar",
'Geostar Fill' => "Geostar Fill",
'Germania One' => "Germania One",
'GFS Didot' => "GFS Didot",
'GFS Neohellenic' => "GFS Neohellenic",
'Gidugu' => "Gidugu",
'Gilda Display' => "Gilda Display",
'Give You Glory' => "Give You Glory",
'Glass Antiqua' => "Glass Antiqua",
'Glegoo' => "Glegoo",
'Gloria Hallelujah' => "Gloria Hallelujah",
'Goblin One' => "Goblin One",
'Gochi Hand' => "Gochi Hand",
'Gorditas' => "Gorditas",
'Goudy Bookletter 1911' => "Goudy Bookletter 1911",
'Graduate' => "Graduate",
'Grand Hotel' => "Grand Hotel",
'Gravitas One' => "Gravitas One",
'Great Vibes' => "Great Vibes",
'Griffy' => "Griffy",
'Gruppo' => "Gruppo",
'Gudea' => "Gudea",
'Gurajada' => "Gurajada",
'Habibi' => "Habibi",
'Halant' => "Halant",
'Hammersmith One' => "Hammersmith One",
'Hanalei' => "Hanalei",
'Hanalei Fill' => "Hanalei Fill",
'Handlee' => "Handlee",
'Hanuman' => "Hanuman",
'Happy Monkey' => "Happy Monkey",
'Headland One' => "Headland One",
'Henny Penny' => "Henny Penny",
'Herr Von Muellerhoff' => "Herr Von Muellerhoff",
'Hind' => "Hind",
'Hind Siliguri' => "Hind Siliguri",
'Hind Vadodara' => "Hind Vadodara",
'Holtwood One SC' => "Holtwood One SC",
'Homemade Apple' => "Homemade Apple",
'Homenaje' => "Homenaje",
'Iceberg' => "Iceberg",
'Iceland' => "Iceland",
'IM Fell Double Pica' => "IM Fell Double Pica",
'IM Fell Double Pica SC' => "IM Fell Double Pica SC",
'IM Fell DW Pica' => "IM Fell DW Pica",
'IM Fell DW Pica SC' => "IM Fell DW Pica SC",
'IM Fell English' => "IM Fell English",
'IM Fell English SC' => "IM Fell English SC",
'IM Fell French Canon' => "IM Fell French Canon",
'IM Fell French Canon SC' => "IM Fell French Canon SC",
'IM Fell Great Primer' => "IM Fell Great Primer",
'IM Fell Great Primer SC' => "IM Fell Great Primer SC",
'Imprima' => "Imprima",
'Inconsolata' => "Inconsolata",
'Inder' => "Inder",
'Indie Flower' => "Indie Flower",
'Inika' => "Inika",
'Inknut Antiqua' => "Inknut Antiqua",
'Irish Grover' => "Irish Grover",
'Istok Web' => "Istok Web",
'Italiana' => "Italiana",
'Italianno' => "Italianno",
'Itim' => "Itim",
'Jacques Francois' => "Jacques Francois",
'Jacques Francois Shadow' => "Jacques Francois Shadow",
'Jaldi' => "Jaldi",
'Jim Nightshade' => "Jim Nightshade",
'Jockey One' => "Jockey One",
'Jolly Lodger' => "Jolly Lodger",
'Josefin Sans' => "Josefin Sans",
'Josefin Slab' => "Josefin Slab",
'Joti One' => "Joti One",
'Judson' => "Judson",
'Julee' => "Julee",
'Julius Sans One' => "Julius Sans One",
'Junge' => "Junge",
'Jura' => "Jura",
'Just Another Hand' => "Just Another Hand",
'Just Me Again Down Here' => "Just Me Again Down Here",
'Kadwa' => "Kadwa",
'Kalam' => "Kalam",
'Kameron' => "Kameron",
'Kantumruy' => "Kantumruy",
'Karla' => "Karla",
'Karma' => "Karma",
'Kaushan Script' => "Kaushan Script",
'Kavoon' => "Kavoon",
'Kdam Thmor' => "Kdam Thmor",
'Keania One' => "Keania One",
'Kelly Slab' => "Kelly Slab",
'Kenia' => "Kenia",
'Khand' => "Khand",
'Khmer' => "Khmer",
'Khula' => "Khula",
'Kite One' => "Kite One",
'Knewave' => "Knewave",
'Kotta One' => "Kotta One",
'Koulen' => "Koulen",
'Kranky' => "Kranky",
'Kreon' => "Kreon",
'Kristi' => "Kristi",
'Krona One' => "Krona One",
'Kurale' => "Kurale",
'La Belle Aurore' => "La Belle Aurore",
'Laila' => "Laila",
'Lakki Reddy' => "Lakki Reddy",
'Lancelot' => "Lancelot",
'Lateef' => "Lateef",
'Lato' => "Lato",
'League Script' => "League Script",
'Leckerli One' => "Leckerli One",
'Ledger' => "Ledger",
'Lekton' => "Lekton",
'Lemon' => "Lemon",
'Libre Baskerville' => "Libre Baskerville",
'Life Savers' => "Life Savers",
'Lilita One' => "Lilita One",
'Lily Script One' => "Lily Script One",
'Limelight' => "Limelight",
'Linden Hill' => "Linden Hill",
'Lobster' => "Lobster",
'Lobster Two' => "Lobster Two",
'Londrina Outline' => "Londrina Outline",
'Londrina Shadow' => "Londrina Shadow",
'Londrina Sketch' => "Londrina Sketch",
'Londrina Solid' => "Londrina Solid",
'Lora' => "Lora",
'Love Ya Like A Sister' => "Love Ya Like A Sister",
'Loved by the King' => "Loved by the King",
'Lovers Quarrel' => "Lovers Quarrel",
'Luckiest Guy' => "Luckiest Guy",
'Lusitana' => "Lusitana",
'Lustria' => "Lustria",
'Macondo' => "Macondo",
'Macondo Swash Caps' => "Macondo Swash Caps",
'Magra' => "Magra",
'Maiden Orange' => "Maiden Orange",
'Mako' => "Mako",
'Mallanna' => "Mallanna",
'Mandali' => "Mandali",
'Marcellus' => "Marcellus",
'Marcellus SC' => "Marcellus SC",
'Marck Script' => "Marck Script",
'Margarine' => "Margarine",
'Marko One' => "Marko One",
'Marmelad' => "Marmelad",
'Martel' => "Martel",
'Martel Sans' => "Martel Sans",
'Marvel' => "Marvel",
'Mate' => "Mate",
'Mate SC' => "Mate SC",
'Maven Pro' => "Maven Pro",
'McLaren' => "McLaren",
'Meddon' => "Meddon",
'MedievalSharp' => "MedievalSharp",
'Medula One' => "Medula One",
'Megrim' => "Megrim",
'Meie Script' => "Meie Script",
'Merienda' => "Merienda",
'Merienda One' => "Merienda One",
'Merriweather' => "Merriweather",
'Merriweather Sans' => "Merriweather Sans",
'Metal' => "Metal",
'Metal Mania' => "Metal Mania",
'Metamorphous' => "Metamorphous",
'Metrophobic' => "Metrophobic",
'Michroma' => "Michroma",
'Milonga' => "Milonga",
'Miltonian' => "Miltonian",
'Miltonian Tattoo' => "Miltonian Tattoo",
'Miniver' => "Miniver",
'Miss Fajardose' => "Miss Fajardose",
'Modak' => "Modak",
'Modern Antiqua' => "Modern Antiqua",
'Molengo' => "Molengo",
'Molle' => "Molle",
'Monda' => "Monda",
'Monofett' => "Monofett",
'Monoton' => "Monoton",
'Monsieur La Doulaise' => "Monsieur La Doulaise",
'Montaga' => "Montaga",
'Montez' => "Montez",
'Montserrat' => "Montserrat",
'Montserrat Alternates' => "Montserrat Alternates",
'Montserrat Subrayada' => "Montserrat Subrayada",
'Moul' => "Moul",
'Moulpali' => "Moulpali",
'Mountains of Christmas' => "Mountains of Christmas",
'Mouse Memoirs' => "Mouse Memoirs",
'Mr Bedfort' => "Mr Bedfort",
'Mr Dafoe' => "Mr Dafoe",
'Mr De Haviland' => "Mr De Haviland",
'Mrs Saint Delafield' => "Mrs Saint Delafield",
'Mrs Sheppards' => "Mrs Sheppards",
'Muli' => "Muli",
'Mystery Quest' => "Mystery Quest",
'Neucha' => "Neucha",
'Neuton' => "Neuton",
'New Rocker' => "New Rocker",
'News Cycle' => "News Cycle",
'Niconne' => "Niconne",
'Nixie One' => "Nixie One",
'Nobile' => "Nobile",
'Nokora' => "Nokora",
'Norican' => "Norican",
'Nosifer' => "Nosifer",
'Nothing You Could Do' => "Nothing You Could Do",
'Noticia Text' => "Noticia Text",
'Noto Sans' => "Noto Sans",
'Noto Serif' => "Noto Serif",
'Nova Cut' => "Nova Cut",
'Nova Flat' => "Nova Flat",
'Nova Mono' => "Nova Mono",
'Nova Oval' => "Nova Oval",
'Nova Round' => "Nova Round",
'Nova Script' => "Nova Script",
'Nova Slim' => "Nova Slim",
'Nova Square' => "Nova Square",
'NTR' => "NTR",
'Numans' => "Numans",
'Nunito' => "Nunito",
'Odor Mean Chey' => "Odor Mean Chey",
'Offside' => "Offside",
'Old Standard TT' => "Old Standard TT",
'Oldenburg' => "Oldenburg",
'Oleo Script' => "Oleo Script",
'Oleo Script Swash Caps' => "Oleo Script Swash Caps",
'Open Sans' => "Open Sans",
'Open Sans Condensed' => "Open Sans Condensed",
'Oranienbaum' => "Oranienbaum",
'Orbitron' => "Orbitron",
'Oregano' => "Oregano",
'Orienta' => "Orienta",
'Original Surfer' => "Original Surfer",
'Oswald' => "Oswald",
'Over the Rainbow' => "Over the Rainbow",
'Overlock' => "Overlock",
'Overlock SC' => "Overlock SC",
'Ovo' => "Ovo",
'Oxygen' => "Oxygen",
'Oxygen Mono' => "Oxygen Mono",
'Pacifico' => "Pacifico",
'Palanquin' => "Palanquin",
'Palanquin Dark' => "Palanquin Dark",
'Paprika' => "Paprika",
'Parisienne' => "Parisienne",
'Passero One' => "Passero One",
'Passion One' => "Passion One",
'Pathway Gothic One' => "Pathway Gothic One",
'Patrick Hand' => "Patrick Hand",
'Patrick Hand SC' => "Patrick Hand SC",
'Patua One' => "Patua One",
'Paytone One' => "Paytone One",
'Peddana' => "Peddana",
'Peralta' => "Peralta",
'Permanent Marker' => "Permanent Marker",
'Petit Formal Script' => "Petit Formal Script",
'Petrona' => "Petrona",
'Philosopher' => "Philosopher",
'Piedra' => "Piedra",
'Pinyon Script' => "Pinyon Script",
'Pirata One' => "Pirata One",
'Plaster' => "Plaster",
'Play' => "Play",
'Playball' => "Playball",
'Playfair Display' => "Playfair Display",
'Playfair Display SC' => "Playfair Display SC",
'Podkova' => "Podkova",
'Poiret One' => "Poiret One",
'Poller One' => "Poller One",
'Poly' => "Poly",
'Pompiere' => "Pompiere",
'Pontano Sans' => "Pontano Sans",
'Poppins' => "Poppins",
'Port Lligat Sans' => "Port Lligat Sans",
'Port Lligat Slab' => "Port Lligat Slab",
'Pragati Narrow' => "Pragati Narrow",
'Prata' => "Prata",
'Preahvihear' => "Preahvihear",
'Press Start 2P' => "Press Start 2P",
'Princess Sofia' => "Princess Sofia",
'Prociono' => "Prociono",
'Prosto One' => "Prosto One",
'PT Mono' => "PT Mono",
'PT Sans' => "PT Sans",
'PT Sans Caption' => "PT Sans Caption",
'PT Sans Narrow' => "PT Sans Narrow",
'PT Serif' => "PT Serif",
'PT Serif Caption' => "PT Serif Caption",
'Puritan' => "Puritan",
'Purple Purse' => "Purple Purse",
'Quando' => "Quando",
'Quantico' => "Quantico",
'Quattrocento' => "Quattrocento",
'Quattrocento Sans' => "Quattrocento Sans",
'Questrial' => "Questrial",
'Quicksand' => "Quicksand",
'Quintessential' => "Quintessential",
'Qwigley' => "Qwigley",
'Racing Sans One' => "Racing Sans One",
'Radley' => "Radley",
'Rajdhani' => "Rajdhani",
'Raleway' => "Raleway",
'Raleway Dots' => "Raleway Dots",
'Ramabhadra' => "Ramabhadra",
'Ramaraja' => "Ramaraja",
'Rambla' => "Rambla",
'Rammetto One' => "Rammetto One",
'Ranchers' => "Ranchers",
'Rancho' => "Rancho",
'Ranga' => "Ranga",
'Rationale' => "Rationale",
'Ravi Prakash' => "Ravi Prakash",
'Redressed' => "Redressed",
'Reenie Beanie' => "Reenie Beanie",
'Revalia' => "Revalia",
'Rhodium Libre' => "Rhodium Libre",
'Ribeye' => "Ribeye",
'Ribeye Marrow' => "Ribeye Marrow",
'Righteous' => "Righteous",
'Risque' => "Risque",
'Roboto' => "Roboto",
'Roboto Condensed' => "Roboto Condensed",
'Roboto Mono' => "Roboto Mono",
'Roboto Slab' => "Roboto Slab",
'Rochester' => "Rochester",
'Rock Salt' => "Rock Salt",
'Rokkitt' => "Rokkitt",
'Romanesco' => "Romanesco",
'Ropa Sans' => "Ropa Sans",
'Rosario' => "Rosario",
'Rosarivo' => "Rosarivo",
'Rouge Script' => "Rouge Script",
'Rozha One' => "Rozha One",
'Rubik' => "Rubik",
'Rubik Mono One' => "Rubik Mono One",
'Rubik One' => "Rubik One",
'Ruda' => "Ruda",
'Rufina' => "Rufina",
'Ruge Boogie' => "Ruge Boogie",
'Ruluko' => "Ruluko",
'Rum Raisin' => "Rum Raisin",
'Ruslan Display' => "Ruslan Display",
'Russo One' => "Russo One",
'Ruthie' => "Ruthie",
'Rye' => "Rye",
'Sacramento' => "Sacramento",
'Sahitya' => "Sahitya",
'Sail' => "Sail",
'Salsa' => "Salsa",
'Sanchez' => "Sanchez",
'Sancreek' => "Sancreek",
'Sansita One' => "Sansita One",
'Sarala' => "Sarala",
'Sarina' => "Sarina",
'Sarpanch' => "Sarpanch",
'Satisfy' => "Satisfy",
'Scada' => "Scada",
'Scheherazade' => "Scheherazade",
'Schoolbell' => "Schoolbell",
'Seaweed Script' => "Seaweed Script",
'Sevillana' => "Sevillana",
'Seymour One' => "Seymour One",
'Shadows Into Light' => "Shadows Into Light",
'Shadows Into Light Two' => "Shadows Into Light Two",
'Shanti' => "Shanti",
'Share' => "Share",
'Share Tech' => "Share Tech",
'Share Tech Mono' => "Share Tech Mono",
'Shojumaru' => "Shojumaru",
'Short Stack' => "Short Stack",
'Siemreap' => "Siemreap",
'Sigmar One' => "Sigmar One",
'Signika' => "Signika",
'Signika Negative' => "Signika Negative",
'Simonetta' => "Simonetta",
'Sintony' => "Sintony",
'Sirin Stencil' => "Sirin Stencil",
'Six Caps' => "Six Caps",
'Skranji' => "Skranji",
'Slabo 13px' => "Slabo 13px",
'Slabo 27px' => "Slabo 27px",
'Slackey' => "Slackey",
'Smokum' => "Smokum",
'Smythe' => "Smythe",
'Sniglet' => "Sniglet",
'Snippet' => "Snippet",
'Snowburst One' => "Snowburst One",
'Sofadi One' => "Sofadi One",
'Sofia' => "Sofia",
'Sonsie One' => "Sonsie One",
'Sorts Mill Goudy' => "Sorts Mill Goudy",
'Source Code Pro' => "Source Code Pro",
'Source Sans Pro' => "Source Sans Pro",
'Source Serif Pro' => "Source Serif Pro",
'Special Elite' => "Special Elite",
'Spicy Rice' => "Spicy Rice",
'Spinnaker' => "Spinnaker",
'Spirax' => "Spirax",
'Squada One' => "Squada One",
'Sree Krushnadevaraya' => "Sree Krushnadevaraya",
'Stalemate' => "Stalemate",
'Stalinist One' => "Stalinist One",
'Stardos Stencil' => "Stardos Stencil",
'Stint Ultra Condensed' => "Stint Ultra Condensed",
'Stint Ultra Expanded' => "Stint Ultra Expanded",
'Stoke' => "Stoke",
'Strait' => "Strait",
'Sue Ellen Francisco' => "Sue Ellen Francisco",
'Sumana' => "Sumana",
'Sunshiney' => "Sunshiney",
'Supermercado One' => "Supermercado One",
'Sura' => "Sura",
'Suranna' => "Suranna",
'Suravaram' => "Suravaram",
'Suwannaphum' => "Suwannaphum",
'Swanky and Moo Moo' => "Swanky and Moo Moo",
'Syncopate' => "Syncopate",
'Tangerine' => "Tangerine",
'Taprom' => "Taprom",
'Tauri' => "Tauri",
'Teko' => "Teko",
'Telex' => "Telex",
'Tenali Ramakrishna' => "Tenali Ramakrishna",
'Tenor Sans' => "Tenor Sans",
'Text Me One' => "Text Me One",
'The Girl Next Door' => "The Girl Next Door",
'Tienne' => "Tienne",
'Tillana' => "Tillana",
'Timmana' => "Timmana",
'Tinos' => "Tinos",
'Titan One' => "Titan One",
'Titillium Web' => "Titillium Web",
'Trade Winds' => "Trade Winds",
'Trocchi' => "Trocchi",
'Trochut' => "Trochut",
'Trykker' => "Trykker",
'Tulpen One' => "Tulpen One",
'Ubuntu' => "Ubuntu",
'Ubuntu Condensed' => "Ubuntu Condensed",
'Ubuntu Mono' => "Ubuntu Mono",
'Ultra' => "Ultra",
'Uncial Antiqua' => "Uncial Antiqua",
'Underdog' => "Underdog",
'Unica One' => "Unica One",
'UnifrakturCook' => "UnifrakturCook",
'UnifrakturMaguntia' => "UnifrakturMaguntia",
'Unkempt' => "Unkempt",
'Unlock' => "Unlock",
'Unna' => "Unna",
'Vampiro One' => "Vampiro One",
'Varela' => "Varela",
'Varela Round' => "Varela Round",
'Vast Shadow' => "Vast Shadow",
'Vesper Libre' => "Vesper Libre",
'Vibur' => "Vibur",
'Vidaloka' => "Vidaloka",
'Viga' => "Viga",
'Voces' => "Voces",
'Volkhov' => "Volkhov",
'Vollkorn' => "Vollkorn",
'Voltaire' => "Voltaire",
'VT323' => "VT323",
'Waiting for the Sunrise' => "Waiting for the Sunrise",
'Wallpoet' => "Wallpoet",
'Walter Turncoat' => "Walter Turncoat",
'Warnes' => "Warnes",
'Wellfleet' => "Wellfleet",
'Wendy One' => "Wendy One",
'Wire One' => "Wire One",
'Work Sans' => "Work Sans",
'Yanone Kaffeesatz' => "Yanone Kaffeesatz",
'Yantramanav' => "Yantramanav",
'Yellowtail' => "Yellowtail",
'Yeseva One' => "Yeseva One",
'Yesteryear' => "Yesteryear",
'Zeyada' => "Zeyada"
);

$from0to6 = array(
    '0px' => "0px",
    '1px' => "1px",
    '2px' => "2px",
    '3px' => "3px",
    '4px' => "4px",
    '5px' => "5px",
    '6px' => "6px",
);

$from0to8 = array(
    '0px' => "0px",
    '1px' => "1px",
    '2px' => "2px",
    '3px' => "3px",
    '4px' => "4px",
    '5px' => "5px",
    '6px' => "6px",
    '7px' => "7px",
    '8px' => "8px",
);

$from0to12 = array(
    '0px' => "0px",
    '1px' => "1px",
    '2px' => "2px",
    '3px' => "3px",
    '4px' => "4px",
    '5px' => "5px",
    '6px' => "6px",
    '7px' => "7px",
    '8px' => "8px",
    '9px' => "9px",
    '10px' => "10px",
    '11px' => "11px",
    '12px' => "12px",
);

$from10to16 = array(
    '10px' => "10px",
    '11px' => "11px",
    '12px' => "12px",
    '13px' => "13px",
    '14px' => "14px",
    '15px' => "15px",
    '16px' => "16px",
);

$from0to20 = array(
    '0px' => "0px",
    '5px' => "5px",
    '10px' => "10px",
    '15px' => "15px",
    '20px' => "20px",
);

$choices1to12 = array(
	'1' => '1',
	'2' => '2',
	'3' => '3',
	'4' => '4',
	'5' => '5',
	'6' => '6',
	'7' => '7',
	'8' => '8',
	'9' => '9',
	'10' => '10',
	'11' => '11',
	'12' => '12'
);

$borderstyles = array(
    'solid' => 'solid',
    'dashed' => 'dashed',
    'dotted' => 'dotted',
    'double' => 'double',
);

if (is_siteadmin()) {
    // Adaptable theme settings page.
    $ADMIN->add('themes', new admin_category('theme_adaptable', 'adaptable'));

	include(dirname(__FILE__) . '/settings/colors.php');
	include(dirname(__FILE__) . '/settings/fonts.php');
	include(dirname(__FILE__) . '/settings/buttons.php');
	include(dirname(__FILE__) . '/settings/header.php');
	include(dirname(__FILE__) . '/settings/header_menus.php');
	include(dirname(__FILE__) . '/settings/header_user.php');
	include(dirname(__FILE__) . '/settings/header_social.php');
	include(dirname(__FILE__) . '/settings/header_navbar.php');
	include(dirname(__FILE__) . '/settings/header_navbar_menu.php');	
	include(dirname(__FILE__) . '/settings/block_settings.php');
	include(dirname(__FILE__) . '/settings/marketing_blocks.php');
	include(dirname(__FILE__) . '/settings/frontpage_courses.php');
	include(dirname(__FILE__) . '/settings/frontpage_ticker.php');
	include(dirname(__FILE__) . '/settings/frontpage_slider.php');	
	include(dirname(__FILE__) . '/settings/alert_box.php');	
	include(dirname(__FILE__) . '/settings/layout.php');
	include(dirname(__FILE__) . '/settings/mobile_settings.php');
	include(dirname(__FILE__) . '/settings/custom_css.php');
	include(dirname(__FILE__) . '/settings/analytics.php');
}
