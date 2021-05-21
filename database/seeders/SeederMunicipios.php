<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Municipio;
class SeederMunicipios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('municipios')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $municipios = [
          ['id' => '1','estado_id' => '1','municipio' => 'Alto Orinoco'],
          ['id' => '2','estado_id' => '1','municipio' => 'Atabapo'],
          ['id' => '3','estado_id' => '1','municipio' => 'Atures'],
          ['id' => '4','estado_id' => '1','municipio' => 'Autana'],
          ['id' => '5','estado_id' => '1','municipio' => 'Manapiare'],
          ['id' => '6','estado_id' => '1','municipio' => 'Maroa'],
          ['id' => '7','estado_id' => '1','municipio' => 'Río Negro'],
          ['id' => '8','estado_id' => '2','municipio' => 'Anaco'],
          ['id' => '9','estado_id' => '2','municipio' => 'Aragua'],
          ['id' => '10','estado_id' => '2','municipio' => 'Manuel Ezequiel Bruzual'],
          ['id' => '11','estado_id' => '2','municipio' => 'Diego Bautista Urbaneja'],
          ['id' => '12','estado_id' => '2','municipio' => 'Fernando Peñalver'],
          ['id' => '13','estado_id' => '2','municipio' => 'Francisco Del Carmen Carvajal'],
          ['id' => '14','estado_id' => '2','municipio' => 'General Sir Arthur McGregor'],
          ['id' => '15','estado_id' => '2','municipio' => 'Guanta'],
          ['id' => '16','estado_id' => '2','municipio' => 'Independencia'],
          ['id' => '17','estado_id' => '2','municipio' => 'José Gregorio Monagas'],
          ['id' => '18','estado_id' => '2','municipio' => 'Juan Antonio Sotillo'],
          ['id' => '19','estado_id' => '2','municipio' => 'Juan Manuel Cajigal'],
          ['id' => '20','estado_id' => '2','municipio' => 'Libertad'],
          ['id' => '21','estado_id' => '2','municipio' => 'Francisco de Miranda'],
          ['id' => '22','estado_id' => '2','municipio' => 'Pedro María Freites'],
          ['id' => '23','estado_id' => '2','municipio' => 'Píritu'],
          ['id' => '24','estado_id' => '2','municipio' => 'San José de Guanipa'],
          ['id' => '25','estado_id' => '2','municipio' => 'San Juan de Capistrano'],
          ['id' => '26','estado_id' => '2','municipio' => 'Santa Ana'],
          ['id' => '27','estado_id' => '2','municipio' => 'Simón Bolívar'],
          ['id' => '28','estado_id' => '2','municipio' => 'Simón Rodríguez'],
          ['id' => '29','estado_id' => '3','municipio' => 'Achaguas'],
          ['id' => '30','estado_id' => '3','municipio' => 'Biruaca'],
          ['id' => '31','estado_id' => '3','municipio' => 'Muñóz'],
          ['id' => '32','estado_id' => '3','municipio' => 'Páez'],
          ['id' => '33','estado_id' => '3','municipio' => 'Pedro Camejo'],
          ['id' => '34','estado_id' => '3','municipio' => 'Rómulo Gallegos'],
          ['id' => '35','estado_id' => '3','municipio' => 'San Fernando'],
          ['id' => '36','estado_id' => '4','municipio' => 'Atanasio Girardot'],
          ['id' => '37','estado_id' => '4','municipio' => 'Bolívar'],
          ['id' => '38','estado_id' => '4','municipio' => 'Camatagua'],
          ['id' => '39','estado_id' => '4','municipio' => 'Francisco Linares Alcántara'],
          ['id' => '40','estado_id' => '4','municipio' => 'José Ángel Lamas'],
          ['id' => '41','estado_id' => '4','municipio' => 'José Félix Ribas'],
          ['id' => '42','estado_id' => '4','municipio' => 'José Rafael Revenga'],
          ['id' => '43','estado_id' => '4','municipio' => 'Libertador'],
          ['id' => '44','estado_id' => '4','municipio' => 'Mario Briceño Iragorry'],
          ['id' => '45','estado_id' => '4','municipio' => 'Ocumare de la Costa de Oro'],
          ['id' => '46','estado_id' => '4','municipio' => 'San Casimiro'],
          ['id' => '47','estado_id' => '4','municipio' => 'San Sebastián'],
          ['id' => '48','estado_id' => '4','municipio' => 'Santiago Mariño'],
          ['id' => '49','estado_id' => '4','municipio' => 'Santos Michelena'],
          ['id' => '50','estado_id' => '4','municipio' => 'Sucre'],
          ['id' => '51','estado_id' => '4','municipio' => 'Tovar'],
          ['id' => '52','estado_id' => '4','municipio' => 'Urdaneta'],
          ['id' => '53','estado_id' => '4','municipio' => 'Zamora'],
          ['id' => '54','estado_id' => '5','municipio' => 'Alberto Arvelo Torrealba'],
          ['id' => '55','estado_id' => '5','municipio' => 'Andrés Eloy Blanco'],
          ['id' => '56','estado_id' => '5','municipio' => 'Antonio José de Sucre'],
          ['id' => '57','estado_id' => '5','municipio' => 'Arismendi'],
          ['id' => '58','estado_id' => '5','municipio' => 'Barinas'],
          ['id' => '59','estado_id' => '5','municipio' => 'Bolívar'],
          ['id' => '60','estado_id' => '5','municipio' => 'Cruz Paredes'],
          ['id' => '61','estado_id' => '5','municipio' => 'Ezequiel Zamora'],
          ['id' => '62','estado_id' => '5','municipio' => 'Obispos'],
          ['id' => '63','estado_id' => '5','municipio' => 'Pedraza'],
          ['id' => '64','estado_id' => '5','municipio' => 'Rojas'],
          ['id' => '65','estado_id' => '5','municipio' => 'Sosa'],
          ['id' => '66','estado_id' => '6','municipio' => 'Caroní'],
          ['id' => '67','estado_id' => '6','municipio' => 'Cedeño'],
          ['id' => '68','estado_id' => '6','municipio' => 'El Callao'],
          ['id' => '69','estado_id' => '6','municipio' => 'Gran Sabana'],
          ['id' => '70','estado_id' => '6','municipio' => 'Heres'],
          ['id' => '71','estado_id' => '6','municipio' => 'Piar'],
          ['id' => '72','estado_id' => '6','municipio' => 'Angostura (Raúl Leoni)'],
          ['id' => '73','estado_id' => '6','municipio' => 'Roscio'],
          ['id' => '74','estado_id' => '6','municipio' => 'Sifontes'],
          ['id' => '75','estado_id' => '6','municipio' => 'Sucre'],
          ['id' => '76','estado_id' => '6','municipio' => 'Padre Pedro Chien'],
          ['id' => '77','estado_id' => '7','municipio' => 'Bejuma'],
          ['id' => '78','estado_id' => '7','municipio' => 'Carlos Arvelo'],
          ['id' => '79','estado_id' => '7','municipio' => 'Diego Ibarra'],
          ['id' => '80','estado_id' => '7','municipio' => 'Guacara'],
          ['id' => '81','estado_id' => '7','municipio' => 'Juan José Mora'],
          ['id' => '82','estado_id' => '7','municipio' => 'Libertador'],
          ['id' => '83','estado_id' => '7','municipio' => 'Los Guayos'],
          ['id' => '84','estado_id' => '7','municipio' => 'Miranda'],
          ['id' => '85','estado_id' => '7','municipio' => 'Montalbán'],
          ['id' => '86','estado_id' => '7','municipio' => 'Naguanagua'],
          ['id' => '87','estado_id' => '7','municipio' => 'Puerto Cabello'],
          ['id' => '88','estado_id' => '7','municipio' => 'San Diego'],
          ['id' => '89','estado_id' => '7','municipio' => 'San Joaquín'],
          ['id' => '90','estado_id' => '7','municipio' => 'Valencia'],
          ['id' => '91','estado_id' => '8','municipio' => 'Anzoátegui'],
          ['id' => '92','estado_id' => '8','municipio' => 'Tinaquillo'],
          ['id' => '93','estado_id' => '8','municipio' => 'Girardot'],
          ['id' => '94','estado_id' => '8','municipio' => 'Lima Blanco'],
          ['id' => '95','estado_id' => '8','municipio' => 'Pao de San Juan Bautista'],
          ['id' => '96','estado_id' => '8','municipio' => 'Ricaurte'],
          ['id' => '97','estado_id' => '8','municipio' => 'Rómulo Gallegos'],
          ['id' => '98','estado_id' => '8','municipio' => 'San Carlos'],
          ['id' => '99','estado_id' => '8','municipio' => 'Tinaco'],
          ['id' => '100','estado_id' => '9','municipio' => 'Antonio Díaz'],
          ['id' => '101','estado_id' => '9','municipio' => 'Casacoima'],
          ['id' => '102','estado_id' => '9','municipio' => 'Pedernales'],
          ['id' => '103','estado_id' => '9','municipio' => 'Tucupita'],
          ['id' => '104','estado_id' => '10','municipio' => 'Acosta'],
          ['id' => '105','estado_id' => '10','municipio' => 'Bolívar'],
          ['id' => '106','estado_id' => '10','municipio' => 'Buchivacoa'],
          ['id' => '107','estado_id' => '10','municipio' => 'Cacique Manaure'],
          ['id' => '108','estado_id' => '10','municipio' => 'Carirubana'],
          ['id' => '109','estado_id' => '10','municipio' => 'Colina'],
          ['id' => '110','estado_id' => '10','municipio' => 'Dabajuro'],
          ['id' => '111','estado_id' => '10','municipio' => 'Democracia'],
          ['id' => '112','estado_id' => '10','municipio' => 'Falcón'],
          ['id' => '113','estado_id' => '10','municipio' => 'Federación'],
          ['id' => '114','estado_id' => '10','municipio' => 'Jacura'],
          ['id' => '115','estado_id' => '10','municipio' => 'José Laurencio Silva'],
          ['id' => '116','estado_id' => '10','municipio' => 'Los Taques'],
          ['id' => '117','estado_id' => '10','municipio' => 'Mauroa'],
          ['id' => '118','estado_id' => '10','municipio' => 'Miranda'],
          ['id' => '119','estado_id' => '10','municipio' => 'Monseñor Iturriza'],
          ['id' => '120','estado_id' => '10','municipio' => 'Palmasola'],
          ['id' => '121','estado_id' => '10','municipio' => 'Petit'],
          ['id' => '122','estado_id' => '10','municipio' => 'Píritu'],
          ['id' => '123','estado_id' => '10','municipio' => 'San Francisco'],
          ['id' => '124','estado_id' => '10','municipio' => 'Sucre'],
          ['id' => '125','estado_id' => '10','municipio' => 'Tocópero'],
          ['id' => '126','estado_id' => '10','municipio' => 'Unión'],
          ['id' => '127','estado_id' => '10','municipio' => 'Urumaco'],
          ['id' => '128','estado_id' => '10','municipio' => 'Zamora'],
          ['id' => '129','estado_id' => '11','municipio' => 'Camaguán'],
          ['id' => '130','estado_id' => '11','municipio' => 'Chaguaramas'],
          ['id' => '131','estado_id' => '11','municipio' => 'El Socorro'],
          ['id' => '132','estado_id' => '11','municipio' => 'José Félix Ribas'],
          ['id' => '133','estado_id' => '11','municipio' => 'José Tadeo Monagas'],
          ['id' => '134','estado_id' => '11','municipio' => 'Juan Germán Roscio'],
          ['id' => '135','estado_id' => '11','municipio' => 'Julián Mellado'],
          ['id' => '136','estado_id' => '11','municipio' => 'Las Mercedes'],
          ['id' => '137','estado_id' => '11','municipio' => 'Leonardo Infante'],
          ['id' => '138','estado_id' => '11','municipio' => 'Pedro Zaraza'],
          ['id' => '139','estado_id' => '11','municipio' => 'Ortíz'],
          ['id' => '140','estado_id' => '11','municipio' => 'San Gerónimo de Guayabal'],
          ['id' => '141','estado_id' => '11','municipio' => 'San José de Guaribe'],
          ['id' => '142','estado_id' => '11','municipio' => 'Santa María de Ipire'],
          ['id' => '143','estado_id' => '11','municipio' => 'Sebastián Francisco de Miranda'],
          ['id' => '144','estado_id' => '12','municipio' => 'Andrés Eloy Blanco'],
          ['id' => '145','estado_id' => '12','municipio' => 'Crespo'],
          ['id' => '146','estado_id' => '12','municipio' => 'Iribarren'],
          ['id' => '147','estado_id' => '12','municipio' => 'Jiménez'],
          ['id' => '148','estado_id' => '12','municipio' => 'Morán'],
          ['id' => '149','estado_id' => '12','municipio' => 'Palavecino'],
          ['id' => '150','estado_id' => '12','municipio' => 'Simón Planas'],
          ['id' => '151','estado_id' => '12','municipio' => 'Torres'],
          ['id' => '152','estado_id' => '12','municipio' => 'Urdaneta'],
          ['id' => '179','estado_id' => '13','municipio' => 'Alberto Adriani'],
          ['id' => '180','estado_id' => '13','municipio' => 'Andrés Bello'],
          ['id' => '181','estado_id' => '13','municipio' => 'Antonio Pinto Salinas'],
          ['id' => '182','estado_id' => '13','municipio' => 'Aricagua'],
          ['id' => '183','estado_id' => '13','municipio' => 'Arzobispo Chacón'],
          ['id' => '184','estado_id' => '13','municipio' => 'Campo Elías'],
          ['id' => '185','estado_id' => '13','municipio' => 'Caracciolo Parra Olmedo'],
          ['id' => '186','estado_id' => '13','municipio' => 'Cardenal Quintero'],
          ['id' => '187','estado_id' => '13','municipio' => 'Guaraque'],
          ['id' => '188','estado_id' => '13','municipio' => 'Julio César Salas'],
          ['id' => '189','estado_id' => '13','municipio' => 'Justo Briceño'],
          ['id' => '190','estado_id' => '13','municipio' => 'Libertador'],
          ['id' => '191','estado_id' => '13','municipio' => 'Miranda'],
          ['id' => '192','estado_id' => '13','municipio' => 'Obispo Ramos de Lora'],
          ['id' => '193','estado_id' => '13','municipio' => 'Padre Noguera'],
          ['id' => '194','estado_id' => '13','municipio' => 'Pueblo Llano'],
          ['id' => '195','estado_id' => '13','municipio' => 'Rangel'],
          ['id' => '196','estado_id' => '13','municipio' => 'Rivas Dávila'],
          ['id' => '197','estado_id' => '13','municipio' => 'Santos Marquina'],
          ['id' => '198','estado_id' => '13','municipio' => 'Sucre'],
          ['id' => '199','estado_id' => '13','municipio' => 'Tovar'],
          ['id' => '200','estado_id' => '13','municipio' => 'Tulio Febres Cordero'],
          ['id' => '201','estado_id' => '13','municipio' => 'Zea'],
          ['id' => '223','estado_id' => '14','municipio' => 'Acevedo'],
          ['id' => '224','estado_id' => '14','municipio' => 'Andrés Bello'],
          ['id' => '225','estado_id' => '14','municipio' => 'Baruta'],
          ['id' => '226','estado_id' => '14','municipio' => 'Brión'],
          ['id' => '227','estado_id' => '14','municipio' => 'Buroz'],
          ['id' => '228','estado_id' => '14','municipio' => 'Carrizal'],
          ['id' => '229','estado_id' => '14','municipio' => 'Chacao'],
          ['id' => '230','estado_id' => '14','municipio' => 'Cristóbal Rojas'],
          ['id' => '231','estado_id' => '14','municipio' => 'El Hatillo'],
          ['id' => '232','estado_id' => '14','municipio' => 'Guaicaipuro'],
          ['id' => '233','estado_id' => '14','municipio' => 'Independencia'],
          ['id' => '234','estado_id' => '14','municipio' => 'Lander'],
          ['id' => '235','estado_id' => '14','municipio' => 'Los Salias'],
          ['id' => '236','estado_id' => '14','municipio' => 'Páez'],
          ['id' => '237','estado_id' => '14','municipio' => 'Paz Castillo'],
          ['id' => '238','estado_id' => '14','municipio' => 'Pedro Gual'],
          ['id' => '239','estado_id' => '14','municipio' => 'Plaza'],
          ['id' => '240','estado_id' => '14','municipio' => 'Simón Bolívar'],
          ['id' => '241','estado_id' => '14','municipio' => 'Sucre'],
          ['id' => '242','estado_id' => '14','municipio' => 'Urdaneta'],
          ['id' => '243','estado_id' => '14','municipio' => 'Zamora'],
          ['id' => '258','estado_id' => '15','municipio' => 'Acosta'],
          ['id' => '259','estado_id' => '15','municipio' => 'Aguasay'],
          ['id' => '260','estado_id' => '15','municipio' => 'Bolívar'],
          ['id' => '261','estado_id' => '15','municipio' => 'Caripe'],
          ['id' => '262','estado_id' => '15','municipio' => 'Cedeño'],
          ['id' => '263','estado_id' => '15','municipio' => 'Ezequiel Zamora'],
          ['id' => '264','estado_id' => '15','municipio' => 'Libertador'],
          ['id' => '265','estado_id' => '15','municipio' => 'Maturín'],
          ['id' => '266','estado_id' => '15','municipio' => 'Piar'],
          ['id' => '267','estado_id' => '15','municipio' => 'Punceres'],
          ['id' => '268','estado_id' => '15','municipio' => 'Santa Bárbara'],
          ['id' => '269','estado_id' => '15','municipio' => 'Sotillo'],
          ['id' => '270','estado_id' => '15','municipio' => 'Uracoa'],
          ['id' => '271','estado_id' => '16','municipio' => 'Antolín del Campo'],
          ['id' => '272','estado_id' => '16','municipio' => 'Arismendi'],
          ['id' => '273','estado_id' => '16','municipio' => 'García'],
          ['id' => '274','estado_id' => '16','municipio' => 'Gómez'],
          ['id' => '275','estado_id' => '16','municipio' => 'Maneiro'],
          ['id' => '276','estado_id' => '16','municipio' => 'Marcano'],
          ['id' => '277','estado_id' => '16','municipio' => 'Mariño'],
          ['id' => '278','estado_id' => '16','municipio' => 'Península de Macanao'],
          ['id' => '279','estado_id' => '16','municipio' => 'Tubores'],
          ['id' => '280','estado_id' => '16','municipio' => 'Villalba'],
          ['id' => '281','estado_id' => '16','municipio' => 'Díaz'],
          ['id' => '282','estado_id' => '17','municipio' => 'Agua Blanca'],
          ['id' => '283','estado_id' => '17','municipio' => 'Araure'],
          ['id' => '284','estado_id' => '17','municipio' => 'Esteller'],
          ['id' => '285','estado_id' => '17','municipio' => 'Guanare'],
          ['id' => '286','estado_id' => '17','municipio' => 'Guanarito'],
          ['id' => '287','estado_id' => '17','municipio' => 'Monseñor José Vicente de Unda'],
          ['id' => '288','estado_id' => '17','municipio' => 'Ospino'],
          ['id' => '289','estado_id' => '17','municipio' => 'Páez'],
          ['id' => '290','estado_id' => '17','municipio' => 'Papelón'],
          ['id' => '291','estado_id' => '17','municipio' => 'San Genaro de Boconoíto'],
          ['id' => '292','estado_id' => '17','municipio' => 'San Rafael de Onoto'],
          ['id' => '293','estado_id' => '17','municipio' => 'Santa Rosalía'],
          ['id' => '294','estado_id' => '17','municipio' => 'Sucre'],
          ['id' => '295','estado_id' => '17','municipio' => 'Turén'],
          ['id' => '296','estado_id' => '18','municipio' => 'Andrés Eloy Blanco'],
          ['id' => '297','estado_id' => '18','municipio' => 'Andrés Mata'],
          ['id' => '298','estado_id' => '18','municipio' => 'Arismendi'],
          ['id' => '299','estado_id' => '18','municipio' => 'Benítez'],
          ['id' => '300','estado_id' => '18','municipio' => 'Bermúdez'],
          ['id' => '301','estado_id' => '18','municipio' => 'Bolívar'],
          ['id' => '302','estado_id' => '18','municipio' => 'Cajigal'],
          ['id' => '303','estado_id' => '18','municipio' => 'Cruz Salmerón Acosta'],
          ['id' => '304','estado_id' => '18','municipio' => 'Libertador'],
          ['id' => '305','estado_id' => '18','municipio' => 'Mariño'],
          ['id' => '306','estado_id' => '18','municipio' => 'Mejía'],
          ['id' => '307','estado_id' => '18','municipio' => 'Montes'],
          ['id' => '308','estado_id' => '18','municipio' => 'Ribero'],
          ['id' => '309','estado_id' => '18','municipio' => 'Sucre'],
          ['id' => '310','estado_id' => '18','municipio' => 'Valdéz'],
          ['id' => '341','estado_id' => '19','municipio' => 'Andrés Bello'],
          ['id' => '342','estado_id' => '19','municipio' => 'Antonio Rómulo Costa'],
          ['id' => '343','estado_id' => '19','municipio' => 'Ayacucho'],
          ['id' => '344','estado_id' => '19','municipio' => 'Bolívar'],
          ['id' => '345','estado_id' => '19','municipio' => 'Cárdenas'],
          ['id' => '346','estado_id' => '19','municipio' => 'Córdoba'],
          ['id' => '347','estado_id' => '19','municipio' => 'Fernández Feo'],
          ['id' => '348','estado_id' => '19','municipio' => 'Francisco de Miranda'],
          ['id' => '349','estado_id' => '19','municipio' => 'García de Hevia'],
          ['id' => '350','estado_id' => '19','municipio' => 'Guásimos'],
          ['id' => '351','estado_id' => '19','municipio' => 'Independencia'],
          ['id' => '352','estado_id' => '19','municipio' => 'Jáuregui'],
          ['id' => '353','estado_id' => '19','municipio' => 'José María Vargas'],
          ['id' => '354','estado_id' => '19','municipio' => 'Junín'],
          ['id' => '355','estado_id' => '19','municipio' => 'Libertad'],
          ['id' => '356','estado_id' => '19','municipio' => 'Libertador'],
          ['id' => '357','estado_id' => '19','municipio' => 'Lobatera'],
          ['id' => '358','estado_id' => '19','municipio' => 'Michelena'],
          ['id' => '359','estado_id' => '19','municipio' => 'Panamericano'],
          ['id' => '360','estado_id' => '19','municipio' => 'Pedro María Ureña'],
          ['id' => '361','estado_id' => '19','municipio' => 'Rafael Urdaneta'],
          ['id' => '362','estado_id' => '19','municipio' => 'Samuel Darío Maldonado'],
          ['id' => '363','estado_id' => '19','municipio' => 'San Cristóbal'],
          ['id' => '364','estado_id' => '19','municipio' => 'Seboruco'],
          ['id' => '365','estado_id' => '19','municipio' => 'Simón Rodríguez'],
          ['id' => '366','estado_id' => '19','municipio' => 'Sucre'],
          ['id' => '367','estado_id' => '19','municipio' => 'Torbes'],
          ['id' => '368','estado_id' => '19','municipio' => 'Uribante'],
          ['id' => '369','estado_id' => '19','municipio' => 'San Judas Tadeo'],
          ['id' => '370','estado_id' => '20','municipio' => 'Andrés Bello'],
          ['id' => '371','estado_id' => '20','municipio' => 'Boconó'],
          ['id' => '372','estado_id' => '20','municipio' => 'Bolívar'],
          ['id' => '373','estado_id' => '20','municipio' => 'Candelaria'],
          ['id' => '374','estado_id' => '20','municipio' => 'Carache'],
          ['id' => '375','estado_id' => '20','municipio' => 'Escuque'],
          ['id' => '376','estado_id' => '20','municipio' => 'José Felipe Márquez Cañizalez'],
          ['id' => '377','estado_id' => '20','municipio' => 'Juan Vicente Campos Elías'],
          ['id' => '378','estado_id' => '20','municipio' => 'La Ceiba'],
          ['id' => '379','estado_id' => '20','municipio' => 'Miranda'],
          ['id' => '380','estado_id' => '20','municipio' => 'Monte Carmelo'],
          ['id' => '381','estado_id' => '20','municipio' => 'Motatán'],
          ['id' => '382','estado_id' => '20','municipio' => 'Pampán'],
          ['id' => '383','estado_id' => '20','municipio' => 'Pampanito'],
          ['id' => '384','estado_id' => '20','municipio' => 'Rafael Rangel'],
          ['id' => '385','estado_id' => '20','municipio' => 'San Rafael de Carvajal'],
          ['id' => '386','estado_id' => '20','municipio' => 'Sucre'],
          ['id' => '387','estado_id' => '20','municipio' => 'Trujillo'],
          ['id' => '388','estado_id' => '20','municipio' => 'Urdaneta'],
          ['id' => '389','estado_id' => '20','municipio' => 'Valera'],
          ['id' => '390','estado_id' => '21','municipio' => 'Vargas'],
          ['id' => '391','estado_id' => '22','municipio' => 'Arístides Bastidas'],
          ['id' => '392','estado_id' => '22','municipio' => 'Bolívar'],
          ['id' => '407','estado_id' => '22','municipio' => 'Bruzual'],
          ['id' => '408','estado_id' => '22','municipio' => 'Cocorote'],
          ['id' => '409','estado_id' => '22','municipio' => 'Independencia'],
          ['id' => '410','estado_id' => '22','municipio' => 'José Antonio Páez'],
          ['id' => '411','estado_id' => '22','municipio' => 'La Trinidad'],
          ['id' => '412','estado_id' => '22','municipio' => 'Manuel Monge'],
          ['id' => '413','estado_id' => '22','municipio' => 'Nirgua'],
          ['id' => '414','estado_id' => '22','municipio' => 'Peña'],
          ['id' => '415','estado_id' => '22','municipio' => 'San Felipe'],
          ['id' => '416','estado_id' => '22','municipio' => 'Sucre'],
          ['id' => '417','estado_id' => '22','municipio' => 'Urachiche'],
          ['id' => '418','estado_id' => '22','municipio' => 'José Joaquín Veroes'],
          ['id' => '441','estado_id' => '23','municipio' => 'Almirante Padilla'],
          ['id' => '442','estado_id' => '23','municipio' => 'Baralt'],
          ['id' => '443','estado_id' => '23','municipio' => 'Cabimas'],
          ['id' => '444','estado_id' => '23','municipio' => 'Catatumbo'],
          ['id' => '445','estado_id' => '23','municipio' => 'Colón'],
          ['id' => '446','estado_id' => '23','municipio' => 'Francisco Javier Pulgar'],
          ['id' => '447','estado_id' => '23','municipio' => 'Páez'],
          ['id' => '448','estado_id' => '23','municipio' => 'Jesús Enrique Losada'],
          ['id' => '449','estado_id' => '23','municipio' => 'Jesús María Semprún'],
          ['id' => '450','estado_id' => '23','municipio' => 'La Cañada de Urdaneta'],
          ['id' => '451','estado_id' => '23','municipio' => 'Lagunillas'],
          ['id' => '452','estado_id' => '23','municipio' => 'Machiques de Perijá'],
          ['id' => '453','estado_id' => '23','municipio' => 'Mara'],
          ['id' => '454','estado_id' => '23','municipio' => 'Maracaibo'],
          ['id' => '455','estado_id' => '23','municipio' => 'Miranda'],
          ['id' => '456','estado_id' => '23','municipio' => 'Rosario de Perijá'],
          ['id' => '457','estado_id' => '23','municipio' => 'San Francisco'],
          ['id' => '458','estado_id' => '23','municipio' => 'Santa Rita'],
          ['id' => '459','estado_id' => '23','municipio' => 'Simón Bolívar'],
          ['id' => '460','estado_id' => '23','municipio' => 'Sucre'],
          ['id' => '461','estado_id' => '23','municipio' => 'Valmore Rodríguez'],
          ['id' => '462','estado_id' => '24','municipio' => 'Libertador']
        ];
         Municipio::insert($municipios);
    }
}
