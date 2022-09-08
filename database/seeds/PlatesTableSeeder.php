<?php

use Illuminate\Database\Seeder;
use App\Plate;

class PlatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plates = [
            // MC MENU
            [
                "name" => "Big Mac Menu",
                "image" => "default/ImgPlates/MC/big-mac.png",
                "description" => "Goditi il Big Mac® in un McMenu® Large con patatine grandi accompagnate da acqua o bevanda a scelta da 0,5L o Tropicana 100% spremuta d’arancia da 250ml. Oppure in un McMenu® Small, con patatine medie o con insalata verde con pomodori, accompagnati da acqua o bevanda a scelta da 0,4L o Tropicana 100% spremuta d’arancia da 250ml.",
                "price" => "8.50",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Gran Crispy McBacon Menu",
                "image" => "default/ImgPlates/MC/gran-crispy.png",
                "description" => "Chi ama il Crispy McBacon® ne prenderebbe volentieri un altro e un altro e un altro e un altro ancora. Per questo c’è il Gran Crispy McBacon®: carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l'inconfondibile salsa Crispy. Come il classico, ma ancora più grande.",
                "price" => "9.00",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Crispy McWrap Menu",
                "image" => "default/ImgPlates/MC/mc-wrap.png",
                "description" => "Carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l’inconfondibile salsa, avvolti in una fragrante tortilla.",
                "price" => "8.80",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "L'affumicato Menu",
                "image" => "default/ImgPlates/MC/affumicato-mc.png",
                "description" => "Appetitoso, con un gusto che ti sorprende. Ti basterà assaggiare L’Affumicato per farti conquistare dai suoi ingredienti: scamorza affumicata con latte italiano, salsa ai peperoni grigliati e l’immancabile 100% petto di pollo italiano.",
                "price" => "7.90",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "My Selection Chicken Asiago Menu",
                "image" => "default/ImgPlates/MC/chicken-asiago-mc.png",
                "description" => "100% petto di pollo italiano avvolto in una croccante panatura, Asiago DOP, bacon croccante, salsa con olive taggiasche & formaggio e pane EVO con semi di sesamo.",
                "price" => "10.60",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Filet-o-fish Menu",
                "image" => "default/ImgPlates/MC/filet-o-fish-mc.png",
                "description" => "A volte per sorprendere bastano tre semplici ingredienti: merluzzo impanato, formaggio, salsa tartara. Il risultato? Un Grande Classico che unisce il sapore del mare al gusto unico di McDonald’s.",
                "price" => "5.00",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            // PIZZERIA TOTO'
            [
                "name" => "Pizza margherita",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/margherita.jpg",
                "description" => "Pizza Margherita",
                "price" => "5.50",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            [
                "name" => "Pizza patate e wurstel",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/patate-wurstel.jpg",
                "description" => "Pizza Patate e Wurstel",
                "price" => "7.50",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            [
                "name" => "Pizza rucola e grana",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/rucola.jpg",
                "description" => "Pizza Rucola e Grana",
                "price" => "7.80",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            [
                "name" => "Pizza ai 4 formaggi",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/4-formaggi.jpg",
                "description" => "Pizza ai 4 formaggi",
                "price" => "7.00",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            [
                "name" => "Pizza radicchio e salsiccia",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/radicchio-salsiccia.jpg",
                "description" => "Pizza radicchio e salsiccia",
                "price" => "8.70",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            [
                "name" => "Pizza tonno e cipolla",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/tonno-cipolla.jpg",
                "description" => "Pizza tonno e cipolla",
                "price" => "7.80",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            // KFC MENU
            [
                "name" => "Menu Tender Cripsy",
                "image" => "default/ImgPlates/KFC/kfc-menu.jpg",
                "description" => "Menu con un contorno a scelta, una bibita e 4 Tender Crispy, filetti di pollo, croccanti fuori e tenerissimi dentro, serviti con una salsa a scelta.",
                "price" => "9.90",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu Tender Original Recipe",
                "image" => "default/ImgPlates/KFC/kfc-menu.jpg",
                "description" => "Menu con un contorno e una bibita a scelta e 4 Tender Original Recipe, teneri filetti preparati seguendo la ricetta originale del Colonnello Sanders.",
                "price" => "9.90",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu COB OR",
                "image" => "default/ImgPlates/KFC/kfc-menu.jpg",
                "description" => "Menu con un contorno a scelta, una bibita e 2 pezzi di irresistibile pollo con osso - Chicken On the Bones - cucinato secondo la ricetta segreta del Colonnello Sanders, con le 11 erbe e spezie.",
                "price" => "8.50",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu bucket 2 Tender Crispy, 2 Tender OR",
                "image" => "default/ImgPlates/KFC/kfc-menu.jpg",
                "description" => "Un menu bucket con 2 croccantissimi Tender Crispy e 2 Tender Original Recipe, con bibita e contorno a scelta, pensato per una persona, così finalmente puoi tenerlo tutto per te!",
                "price" => "10.10",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu Bucket 2 Tender Crispy, 3 Hot Wings",
                "image" => "default/ImgPlates/KFC/kfc-menu.jpg",
                "description" => "Un menu bucket con 2 tender Crispy e 3 Hot Wings, bibita e contorno a scelta. Questo puoi averlo tutto per te, è pensato per una persona!",
                "price" => "10.10",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu Bucket 10 Tender crispy",
                "image" => "default/ImgPlates/KFC/kfc-menu.jpg",
                "description" => "Menu con contorni e bibite per 2 persone e un Bucket con 10 Tender Crispy, filetti di pollo teneri dentro croccanti fuori. Condividerlo non sarà facile!",
                "price" => "19.90",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            // POKE
            [
                "name" => "Sunny Salmon",
                "image" => "default/ImgPlates/POKE/sunny.jpg",
                "description" => "Riso Bianco, Juicy Salmon, Avocado, Edamame, Cavolo Rosso, Salsa Speciale, Crema di Avocado, Sesamo",
                "price" => "9.95",
                "is_visible" => "true",
                "restaurant_id" => '4'
            ],
            [
                "name" => "Spicy Tuna",
                "image" => "default/ImgPlates/POKE/spicy-tuna.jpg",
                "description" => "Riso Bianco, Tonno, Goma Wakame, Cavolo Rosso, Carote, Cetrioli, Salsa Ponzu, Salsa Spicy Peanuts, Jalapeño, Cipolla Croccante, Tobiko, Sesamo",
                "price" => "11.95",
                "is_visible" => "true",
                "restaurant_id" => '4'
            ],
            [
                "name" => "Roast Beef",
                "image" => "default/ImgPlates/POKE/roast-beef.jpg",
                "description" => "Riso Integrale, Roast Beef all'inglese, Pomodorini, Avocado, Germogli di Soia, Feta, Aromatic Ginger Oil, House Tartar, Mandorle, Sesamo",
                "price" => "11.95",
                "is_visible" => "true",
                "restaurant_id" => '4'
            ],
            [
                "name" => "Chicken",
                "image" => "default/ImgPlates/POKE/chicken.jpg",
                "description" => "Riso Bianco, Pollo Teriyaki e Zenzero, Zucchine, Pomodorini, Cavolo Rosso, Salsa Teriyaki, Salsa Spicy Mayo, Cipollotto, Mandorle, Sesamo",
                "price" => "9.95",
                "is_visible" => "true",
                "restaurant_id" => '4'
            ],
            [
                "name" => "Vegan",
                "image" => "default/ImgPlates/POKE/vegan.jpg",
                "description" => "Quinoa e Cauliflower, Tofu Grigliato Bio, Ceci, Carote, Avocado, Salsa teriyaki, Patata Dolce Croccante, Sesamo",
                "price" => "11.95",
                "is_visible" => "true",
                "restaurant_id" => '4'
            ],
            [
                "name" => "Seasonal Special - Summer Bowl",
                "image" => "default/ImgPlates/POKE/special.jpg",
                "description" => "Riso Basmati, Pollo Teriyaki e Zenzero, Avocado, Pomodorini, Edamame, Olio d’oliva, Avo Mayo, Sesamo",
                "price" => "10.95",
                "is_visible" => "true",
                "restaurant_id" => '4'
            ],
            //Dominos
            [
                "name" => "Half & Half",
                "image" => "default/ImgPlates/DOMINOS/half&half.jpg",
                "description" => "Una pizza con il nostro Classico impasto nella quale potrai scegliere tra 2 gusti a tua scelta",
                "price" => "9.95",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            [
                "name" => "BBQ Chicken",
                "image" => "default/ImgPlates/DOMINOS/BBQChicken.jpg",
                "description" => "Una pizza con il nostro Classico impasto, Salsa BBQ, Mozzarella 100% italiana, Pollo 100% italiano, Cipolla e i nostri fantastici peperoni",
                "price" => "9.55",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            [
                "name" => "Cheeseburger",
                "image" => "default/ImgPlates/DOMINOS/cheesburger.jpg",
                "description" => "Una pizza con il nostro Classico impasto, Bacon, Mozzarella 100% italiana, Salsa burger, Cheddar, Cipolla e Pomodoro 100% italiano",
                "price" => "9.55",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            [
                "name" => "Diavola",
                "image" => "default/ImgPlates/DOMINOS/diavola.jpg",
                "description" => "Una pizza con il nostro Classico impasto, Mozzarella 100% italiana, Original Pepperoni e Pomodoro 100% italiano",
                "price" => "8.55",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            [
                "name" => "Cheddar Melt",
                "image" => "default/ImgPlates/DOMINOS/cheddarMelt.jpg",
                "description" => "Una pizza con il nostro Classico impasto, Mozzarella 100% italiana, Bacon, Mais, Funghi Champignon e Pomodoro 100% italiano",
                "price" => "9.95",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            [
                "name" => "Mexican",
                "image" => "default/ImgPlates/DOMINOS/mexican.jpg",
                "description" => "Una pizza con il nostro Classico impasto, Mozzarella 100% italiana, Hamburger di manzo, Jalape  e Pomodoro 100% italiano",
                "price" => "9.95",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            [
                "name" => "Tonno & Cipolla",
                "image" => "default/ImgPlates/DOMINOS/tonnoCipolla.jpg",
                "description" => "Una pizza con il nostro Classico impasto, Mozzarella 100% italiana, Tonno, Cipolla  e Pomodoro 100% italiano",
                "price" => "9.55",
                "is_visible" => "true",
                "restaurant_id" => '5'
            ],
            //Brasiliano
            [
                "name" => "Manioca fritta",
                "image" => "default/ImgPlates/BRASILIANO/yucaFrita.jpeg",
                "description" => "tipica tubero originario dalla Amazzonia, detto anche il Pane della terra che viene tagliato in piccoli pezzi, fritti nell'olio di oliva e servito con salse tipiche e un'insalata con il pomodoro e il cetriolo",
                "price" => "7.55",
                "is_visible" => "true",
                "restaurant_id" => '6'
            ],
            [
                "name" => "Chips di Platano",
                "image" => "default/ImgPlates/BRASILIANO/PolloConTajadas.webp",
                "description" => "Chips di platano, fritte e condite con insalata, salsa, pezzi di pollo e la nostra cipolla sottaceto fatta in casa con la nostra ricetta segreta",
                "price" => "10.00",
                "is_visible" => "true",
                "restaurant_id" => '6'
            ],
            [
                "name" => "Feijoada",
                "image" => "default/ImgPlates/BRASILIANO/Feijoada.jpg",
                "description" => "Stufato di fagioli preparato con diversi tipi di carne (salsiccia, pancetta affumicata e costine di maiale) e accompagnato da riso bianco, farofa un contorno tipico a base di farina di manioca  cavolo nero rosolato nel burro e qualche fettina di arancia ",
                "price" => "12.30",
                "is_visible" => "true",
                "restaurant_id" => '6'
            ],
            [
                "name" => "Churrasco",
                "image" => "default/ImgPlates/BRASILIANO/churrasco.jpg",
                "description" => "Picanha cotta alla griglia con il metodo tradizionale, una preparazione morbida, succosa e dal retrogusto piacevolmente affumicato, un Must della nostra cucina. ",
                "price" => "20.50",
                "is_visible" => "true",
                "restaurant_id" => '6'
            ],
            [
                "name" => "Moqueca",
                "image" => "default/ImgPlates/BRASILIANO/moqueca.jpg",
                "description" => "La moqueca non è una convenzionale zuppetta di pesce, è un vero e proprio capolavoro di sapori e odori servito in una pentola di argilla bollente in mezzo alla tavola da condividere con amici e familiari. ",
                "price" => "15.80",
                "is_visible" => "true",
                "restaurant_id" => '6'
            ],
            [
                "name" => "Acajarè",
                "image" => "default/ImgPlates/BRASILIANO/acajarè.jpg",
                "description" => "Un tortino di fagioli, olio di palma e purea di cipolle, con un ripieno di gamberetti e una salsa di pane, anacardi e gamberetti detta vatapà. Il tutto cosparso di olio e fritto. ",
                "price" => "9.80",
                "is_visible" => "true",
                "restaurant_id" => '6'
            ],
            //Cinese
            [
                "name" => "HOT POT",
                "image" => "default/ImgPlates/CINESE/hotPot.jpg",
                "description" => "Pesce, carne e verdure una volta infilati in dei lunghi spiedini in legno dovrete immergerli nell’olio bollente, aspettare qualche minuto di cottura ed assaggiarli ",
                "price" => "19.80",
                "is_visible" => "true",
                "restaurant_id" => '7'
            ],
            [
                "name" => "Dumpling",
                "image" => "default/ImgPlates/CINESE/dumpling.jpg",
                "description" => "Tipici e tradizionali ravioli ripieni, sono cotti al vapore,  ripieni con diversi ingredienti, tra cui carne, pesce, formaggi e verdure. ",
                "price" => "4.80",
                "is_visible" => "true",
                "restaurant_id" => '7'
            ],
            [
                "name" => "Anatra Pechinese",
                "image" => "default/ImgPlates/CINESE/anatra.jpg",
                "description" => " L’anatra esternamente si presenta croccante e laccata, mentre all’interno resta morbida ed umida. Si mangia appoggiando una sottile fettina di anatra su una sfoglia di pane, guarnita ed insaporita dalla tipica salsa pechinese. ",
                "price" => "15.80",
                "is_visible" => "true",
                "restaurant_id" => '7'
            ],
            [
                "name" => "Spaghetti di Riso",
                "image" => "default/ImgPlates/CINESE/noodless.jpg",
                "description" => "Sottilissimi spaghetti realizzati con farina di riso, conditi con verdure, carne o pesce e uovo, immersi in una specie di brodo. Possono essere piccanti o piccantissimi, a te la scelta. ",
                "price" => "7.50",
                "is_visible" => "true",
                "restaurant_id" => '7'
            ],
            [
                "name" => "Involtini Primavera",
                "image" => "default/ImgPlates/CINESE/involtiniPrimavera.jpg",
                "description" => "Questo piatto è composto da una sfoglia sottile e croccante ed è farcita con un mix di verdure speziate dal sapore inconfondibile. Possono essere serviti sia fritti che al naturale accompagnati da una salsa agrodolce. ",
                "price" => "3.50",
                "is_visible" => "true",
                "restaurant_id" => '7'
            ],
            [
                "name" => "Riso alla cantonese",
                "image" => "default/ImgPlates/CINESE/risoCantonese.jpg",
                "description" => "Piselli, tocchetti di prosciutto cotto e uova, insaporiranno i bianchi chicchi di riso. Piatto leggero e divertente da sperimentare anche con l’ausilio della famosissime bacchette in legno. ",
                "price" => "5.50",
                "is_visible" => "true",
                "restaurant_id" => '7'
            ],
            //pizzeria del sole
            [
                "name" => "Pizza margherita",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/margherita.jpg",
                "description" => "Pizza Margherita",
                "price" => "5.50",
                "is_visible" => "true",
                "restaurant_id" => '8'
            ],
            [
                "name" => "Pizza patate e wurstel",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/patate-wurstel.jpg",
                "description" => "Pizza Patate e Wurstel",
                "price" => "7.50",
                "is_visible" => "true",
                "restaurant_id" => '8'
            ],
            [
                "name" => "Pizza rucola e grana",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/rucola.jpg",
                "description" => "Pizza Rucola e Grana",
                "price" => "7.80",
                "is_visible" => "true",
                "restaurant_id" => '8'
            ],
            [
                "name" => "Pizza ai 4 formaggi",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/4-formaggi.jpg",
                "description" => "Pizza ai 4 formaggi",
                "price" => "7.00",
                "is_visible" => "true",
                "restaurant_id" => '8'
            ],
            [
                "name" => "Pizza radicchio e salsiccia",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/radicchio-salsiccia.jpg",
                "description" => "Pizza radicchio e salsiccia",
                "price" => "8.70",
                "is_visible" => "true",
                "restaurant_id" => '8'
            ],
            [
                "name" => "Pizza tonno e cipolla",
                "image" => "default/ImgPlates/PIZZERIA-TOTO/tonno-cipolla.jpg",
                "description" => "Pizza tonno e cipolla",
                "price" => "7.80",
                "is_visible" => "true",
                "restaurant_id" => '8'
            ],
            //Burger King
        ];

        foreach($plates as $plate){
            $newPlate = new Plate();
            $newPlate->name = $plate['name'];
            $newPlate->description = $plate['description'];
            $newPlate->price = $plate['price'];
            $newPlate->img = $plate['image'];
            $newPlate->restaurant_id = $plate['restaurant_id'];
            $newPlate->save();

        }
    }
}
