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
            [
                "name" => "Big Mac Menu",
                "image" => "https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/bundle/bundle-big-mac-isolated.png?itok=-qzS-H9U",
                "description" => "test",
                "price" => "8.50",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Gran Crispy McBacon Menu",
                "image" => "https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/bundle/menu-gran-crispy-mcbacon--hero-isolated_1.png?itok=h3nJj5qe",
                "description" => "Chi ama il Crispy McBacon® ne prenderebbe volentieri un altro e un altro e un altro e un altro ancora. Per questo c’è il Gran Crispy McBacon®: carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l'inconfondibile salsa Crispy. Come il classico, ma ancora più grande.",
                "price" => "9.00",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Crispy McWrap Menu",
                "image" => "https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/bundle/bundle-crispy-mcwrap-isolated.png?itok=i7fZL6Kt",
                "description" => "Carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l’inconfondibile salsa, avvolti in una fragrante tortilla.",
                "price" => "8.80",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "L'affumicato Menu",
                "image" => "https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/bundle/menu-affumicato--hero-isolated.png?itok=eyou2UHD",
                "description" => "Appetitoso, con un gusto che ti sorprende. Ti basterà assaggiare L’Affumicato per farti conquistare dai suoi ingredienti: scamorza affumicata con latte italiano, salsa ai peperoni grigliati e l’immancabile 100% petto di pollo italiano.",
                "price" => "7.90",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "My Selection Chicken Asiago Menu",
                "image" => "https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/bundle/bundle-mys-chicken-asiago--hero-isolated_0.png?itok=lSpqIEw0",
                "description" => "100% petto di pollo italiano avvolto in una croccante panatura, Asiago DOP, bacon croccante, salsa con olive taggiasche & formaggio e pane EVO con semi di sesamo.",
                "price" => "10.60",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Filet-o-fish Menu",
                "image" => "https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/bundle/menu-filet-o-fish--hero-isolated.png?itok=0Gs0X9as",
                "description" => "A volte per sorprendere bastano tre semplici ingredienti: merluzzo impanato, formaggio, salsa tartara. Il risultato? Un Grande Classico che unisce il sapore del mare al gusto unico di McDonald’s.",
                "price" => "5.00",
                "is_visible" => "true",
                "restaurant_id" => '1'
            ],
            [
                "name" => "Spaghetti amatriciana",
                "image" => "https://www.melarossa.it/wp-content/uploads/2021/04/bucatini-all-amatriciana.jpg",
                "description" => "Un piatto dal gusto pieno ed appagante. La sua squisita bontà nasce da ingredienti semplici e di ottima qualità, che si sposano bene nel colore, nel profumo e nel gusto; tanto da diventare fiore all’occhiello anche di grandi chef, per la gioia dei nostri palati.",
                "price" => "7.00",
                "is_visible" => "true",
                "restaurant_id" => '2'
            ],
            // kfc
            [
                "name" => "Menu Tender Cripsy",
                "image" => "default/ImgPlates/kfc-menu.jpg",
                "description" => "Menu con un contorno a scelta, una bibita e 4 Tender Crispy, filetti di pollo, croccanti fuori e tenerissimi dentro, serviti con una salsa a scelta.",
                "price" => "9.90",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu Tender Original Recipe",
                "image" => "default/ImgPlates/kfc-menu.jpg",
                "description" => "Menu con un contorno e una bibita a scelta e 4 Tender Original Recipe, teneri filetti preparati seguendo la ricetta originale del Colonnello Sanders.",
                "price" => "9.90",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu COB OR",
                "image" => "default/ImgPlates/kfc-menu.jpg",
                "description" => "Menu con un contorno a scelta, una bibita e 2 pezzi di irresistibile pollo con osso - Chicken On the Bones - cucinato secondo la ricetta segreta del Colonnello Sanders, con le 11 erbe e spezie.",
                "price" => "8.50",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu bucket 2 Tender Crispy, 2 Tender OR",
                "image" => "default/ImgPlates/kfc-menu.jpg",
                "description" => "Un menu bucket con 2 croccantissimi Tender Crispy e 2 Tender Original Recipe, con bibita e contorno a scelta, pensato per una persona, così finalmente puoi tenerlo tutto per te!",
                "price" => "10.10",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu Bucket 2 Tender Crispy, 3 Hot Wings",
                "image" => "default/ImgPlates/kfc-menu.jpg",
                "description" => "Un menu bucket con 2 tender Crispy e 3 Hot Wings, bibita e contorno a scelta. Questo puoi averlo tutto per te, è pensato per una persona!",
                "price" => "10.10",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
            [
                "name" => "Menu Bucket 10 Tender crispy",
                "image" => "default/ImgPlates/kfc-menu.jpg",
                "description" => "Menu con contorni e bibite per 2 persone e un Bucket con 10 Tender Crispy, filetti di pollo teneri dentro croccanti fuori. Condividerlo non sarà facile!",
                "price" => "19.90",
                "is_visible" => "true",
                "restaurant_id" => '3'
            ],
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
