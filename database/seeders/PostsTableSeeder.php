<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Staf;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = Post::create([
            'title' => 'Departamenti i Gastronomisë',
            'description' => 'Qëllimi parësor i Departamentit të Gastronomisë është të edukojë studentë në Menaxhimin e kuzhinës, pastiçerisë, somelierisë, pijeve dhe bar-kafeve po ashtu edhe në kategori të tjera si bukëpjekje, piceri dhe kreperi. Me anë të këtij programi synohet përgatitja e studentëve të cilët në të ardhmen, në sajë të njohurive dhe aftësive të fituara mund të konkurrojnë brenda dhe jashtë vendit. Në këtë drejtim, studentët do pajisen me teknika të artit të kuzhinës duke filluar nga konceptet kryesore fillestare deri në avancimin e tyre.
            Ata do të fitojnë aftësitë menaxheriale që do u duhen në jetën e tyre profesionale. Në fund të kursit, studentët do të kenë njohuri të shkëlqyera, do të pajisen me çertifikatë dhe studentëve me të suksesshëm do u ofrohet mundësi e mëtejshme për zhvillimin e karrierës akademike si dhe pajisja me titullin “Chef”.',
            'short_description' => 'Menaxhimin e kuzhinës, pastiçerisë, somelierisë, pijeve dhe bar-kafeve, po ashtu edhe në kategori të tjera si bukëpjekje, piceri dhe kreperi.',
            'user_id' => '1',
            'image' => '5.jpg',
            'png' => 'icon-1.png'
        ]);
        $post2 = Post::create([
            'title' => 'Departamenti i Menaxhim Hoteleri',
            'description' => 'I specializuar në administrimin e hotelit dhe bujtinës, menaxhimin e sallave, restoranteve, mjediseve rekreative, pishinave, kopshteve dhe të tjera kategorive, departamenti ofron mundësi të arsimit të plotë për njerëz energjikë të cilët kanë pasion shërbimin. Për ata të cilët janë aktivë dhe mendojnë se mund të jenë menaxherë të specializuar në të ardhmen dhe të gatshëm të trajtojnë klientët me profesionalizëm. Menaxhimi i hotelerisë është një faktor kryesor në industrinë e turizmit dhe shërbimi i duhur ndaj klientëve është i një rëndësie të konsiderueshme.
            Për këtë arsye ky departament ofron njohjen dhe edukimin me koncepte të përqëndruara në krijimin e mjediseve dhe shërbimeve me cilësi të lartë. Ofrohen mundësi të gjera për avancimin e mëtejshëm të karrierës.',
            'short_description' => 'Administrimin e hotelit, menaxhimin e sallave, restoranteve, mjediseve rekreative, pishinave, kopshteve.',
            'user_id' => '1',
            'image' => '3.jpg',
            'png' => 'icon-2.png'
        ]);
        $post3 = Post::create([
            'title' => 'Departamenti i Administrimit të Eventeve, Spektaklit dhe Show-t',
            'description' => 'Administrimi i eventeve, dekori dhe arredimi, kostumografia, spektakli dhe show janë pjesë e këtij departamenti. Misioni është zgjerimi i mundësive të njohjes dhe konceptimit të botës së artit, duke i dhënë cilësi të veçantë punës së stafit të përgatitur. Mundësohet edukimi me botën e krijimtarisë për të konceptuar ide që konsiderohen unike dhe për t’u aftësuar në krijimin dhe bashkimin e elementëve të ndryshëm në mënyrë që të planifikohet eventi apo shërbimi i përsosur. Menaxhimi i eventeve dhe vetë bota e televizionit përbëjnë një art të shkëlqyer të ditëve të sotme.
            Me anë të programeve tona, personave të spikatur të gatshëm për të transmetuar përvojat e tyre disa vjeçare dhe njohuritë e tyre të shumta, keni mundësinë të vini në përdorim aftësitë për t’i dhënë atyre formë profesionale.',
            'short_description' => 'Administrimi i eventeve, dekori dhe arredimi, kostumografia, spektakli dhe show janë pjesë e këtij departamenti.',
            'user_id' => '1',
            'image' => '4.jpg',
            'png' => 'icon-3.png'
        ]);
        $post4 = Post::create([
            'title' => 'Departamenti i Guidës Historike dhe asaj të Panjohur',
            'description' => 'Misioni i këtij departamenti është të ndiqen programet specifike të cilat mundësojnë njohuritë përkatëse në lidhje me ruajtjen dhe promovimin e gamës së gjerë të pasurive kulturore të një vendi.
            Interesi në rritje i turistëve për përvoja të reja kulturore sjell mundësi të konsiderueshme në zgjerimin e kësaj fushe. Departamenti është i ndarë në kategori të cilat përmbajnë guidën turistike, etnofolklorike, arkeologjike, urbane dhe teknologjike. Po ashtu edhe njohuri mbi historinë dhe kulturën e kombit, arkitekturën së bashku me vlerat që e dallojnë atë, qendrat historike, teknologjinë dhe inovacionin si pjesë e qyteteve tona e të tjera.',
            'short_description' => 'Programe specifike të cilat mundësojnë njohuritë përkatëse në lidhje me ruajtjen dhe promovimin e pasurive kulturore.',
            'user_id' => '1',
            'image' => '1.jpg',
            'png' => 'icon-4.png'
        ]);
        $post5 = Post::create([
            'title' => 'Departamenti i Agjencisë Turistike',
            'description' => 'Mundësohet studimi i teknikave më të avancuara për të drejtuar industrinë e udhëtimit dhe turizmit në mënyrën më të mirë të mundshme!
            Programi përgatit studentët në aspekte të tjera përtej prenotimit të biletave të tilla si, krijimin e paketave turistike, administrimin e produktit turistik, terminologjisë ajrore, organizimin e ekskursioneve dhe transportit, ndërveprimin me agjenci të tjera, faktorët që lidhen me ruajtjen e sigurisë dhe mbështetjes gjithëpërfshirëse të turistëve etj.',
            'short_description' => 'Teknikat më të avancuara për të drejtuar industrinë e udhëtimit dhe turizmit në mënyrën më të mirë të mundshme.',
            'user_id' => '1',
            'image' => '2.jpg',
            'png' => 'icon-5.png'
        ]);
        $post6 = Post::create([
            'title' => 'Departamenti TIK (Teknologjia e Informacionit dhe Komunikimit )',
            'description' => 'Departamenti TIK (Teknologji e Informacionit dhe Komunikimit) ofron një studim të mirëfilltë të inovacionit dixhital, teknologjisë së marketingut, tregut dhe perspektivës dixhitale.
            Diversiteti i programeve të cilat janë vazhdimisht në proces fuqizimi ofron mundësi të shumta në njohjen e detajuar të botës së teknologjisë. Ne përpiqemi ti shërbejmë komunitetit tonë akademik duke përparuar qëllimet strategjike në përfshirjen e koncepteve të reja të teknologjisë të cilat janë në zemër të progresit të shoqërisë së sotme.
            Misioni kryesor i departamentit është të pajisë studentët me njohuri bazë aplikative në fushën e teknologjisë si dhe nën disiplinat mbështetëse duke formuar specialistë në fushat e implementimeve të sistemeve informatike.',
            'short_description' => 'Studim i mirëfilltë i inovacionit dixhital, teknologjisë së marketingut, tregut dhe perspektivës dixhitale.',
            'user_id' => '1',
            'image' => '7.jpg',
            'png' => 'icon-6.png'
        ]);

        $staf1 = Staf::create([
            'name' => 'Arvin Kita',
            'bio' => 'Unë jam drejtuesi i Departamentit të Gastronomisë, i formuar dhe arsimuar në Shkollën Teknologjike dhe në universitetin e Athinës në degën e menaxhimit të aseteve turistike (kuzhinë, shërbime, drejtim). Një profesion sa i vështirë dhe po aq fisnik, i vlerësuar dhe i nderuar kudo! Kuzhina do bëhet pjesë e jetës suaj që me përkushtim, studim dhe punë të vazhdueshme të arrini e ta ktheni atë në realitet, jo vetëm duke u diplomuar në artin e bukur të gastronomisë, por duke u bërë udhëheqës të këtij profesioni, duke spikatur dhe duke u nderuar e vlerësuar. Jepini pasion e përkushtim, shpalosni dëshirën e talentin, përpiquni dhe nuk do zhgënjeheni kurrë, se në bazë të kësaj pune e përkushtimi do mund të arrini majat.',
            'user_id' => '1',
            'image' => 'staf1.jpg',
            'post_id' => $post1->id,
        ]);
        $staf2 = Staf::create([
            'name' => 'Ariol Greca',
            'bio' => 'Unë jam drejtuesi i Menaxhimit të Hotelerisë (Hospitality), i formuar dhe shkolluar në universitetin e Tiranës për Administrim Turistik. Shërbimi & Menaxhimi kanë qenë gjithnjë pasioni im por me përkushtim, studim dhe punë të vazhdueshme arrita ta kthej atë në një urë ku lidhen pasioni me profesionin duke arritur të kem një eksperiencë ndërkombëtare në këtë fushë, në vendet më me zë. Në sajë të pasionit dhe talentit, punës dhe përpjekjeve, nesër edhe ju mund të jeni udhëheqës të suksesshëm jo vetëm në sallë, por edhe në drejtimin e restoranteve, hotele pse jo edhe në kroçere! Aty dhe kudo tjetër ku mund të shprehni aftësitë më së miri!',
            'user_id' => '1',
            'image' => 'staf2.jpg',
            'post_id' => $post2->id,
        ]);
        $staf3 = Staf::create([
            'name' => 'Armand Peza',
            'bio' => 'Unë jam udhëheqësi i departamentit të administrimit të eventeve, spektaklit dhe show-t. “Akademia Momentum” do të përgatisë profesionistë në këtë fushë dhe ju që keni ëndërruar të jeni pjesë e këtij arti unik, tashmë keni një mundësi më shumë të na bashkoheni. Për herë të parë në vendin tonë, vjen si risi një departament me bazë edukimin mbi detyrat dhe përgjegjësitë e planifikimit dhe menaxhimit të eventeve. Unë jam pjesë e Akademisë për t’ju dhënë më të mirën e asaj që kam arritur, me bindjen që ju nesër do ktheheni në përfaqësues të denjë të botës së administrimit!',
            'user_id' => '1',
            'image' => 'staf3.jpg',
            'post_id' => $post3->id,
        ]);
        $staf4 = Staf::create([
            'name' => 'Andia Shtembari',
            'bio' => 'Unë jam Andia dhe së bashku, nëpërmjet dialogut, mësimit interaktiv dhe praktikës në terren, do të arrijmë të themelojmë një brez të kualifikuar udhërrëfyesish turistikë duke vendosur kështu themele të forta në industrinë e turizmit në Shqipëri. Shpreh entuziazmin tim që po më jepet mundësia të mësojmë së bashku më shumë për vendin tonë dhe vlerat që ai ka. E diplomuar në arkeologji dhe me një përvojë të rëndësishme në fushën e trashëgimisë kulturore dhe turizmit në vendin tonë, jam tepër e lumtur që ju do të bëheni pjesë e rrëfimit tim të mbushur plot sfida, por dhe shtigje tepër interesante. Mendoj se ajo çfarë na ka dhuruar e kaluara jonë është një mori vlerash të cilat nuk duhet të harrohen, por duhet t’i përçojmë dhe t’i mbrojmë brez pas brezi dhe përtej kufijve. Ky program do t’ju pajisë me njohuri shtesë lidhur me vendin tonë, gjurmët që kanë lënë të parët, gjuha, tradita dhe zakonet. Është një mundësi për të zbuluar vende të panjohura më parë.',
            'user_id' => '1',
            'image' => 'staf4.jpg',
            'post_id' => $post4->id,
        ]);
        $staf5 = Staf::create([
            'name' => 'Arben Cipa',
            'bio' => 'Unë jam Arben Cipa dhe vij nga një familje e njohur si në botën e medias, politikës ashtu edhe artistike, Cipa. Kam lindur në Himarë dhe kam përfunduar Arsimin e Mesëm në Vlorë, për të vazhduar më pas në Akademinë e Arteve në Tiranë. Pas eksperiencave shumë të bukura, dashuria për vendin, pasioni për natyrën, kulturën dhe historinë, etnografinë dhe folklorin më shtynë drejt një ndërtimi të një kompanie turistike që sot quhet “SIPA TOURS”, e shtrirë në disa qytete të Shqipërisë. Si drejtues i saj ndjej nevojën e përgatitjes së një gjenerate tjetër më cilësore, të arsimuar dhe të formuar fort për t’u përfshirë në këtë industri të së ardhmes, sikur është turizmi për Shqipërinë. Unë do të jem pedagogu juaj i Departamentit të Agjencisë Turistike në këtë Akademi, do të jem kolegu juaj, do të jem një ndër modelet tuaja sesi mundet pasioni dhe dëshira të transformohen në një profesion frytdhënës. Jam pjesë e Akademisë për ta bërë ëndrrën tuaj misionin e jetës dhe mirëqenies suaj.',
            'user_id' => '1',
            'image' => 'staf5.jpg',
            'post_id' => $post5->id,
        ]);
        $staf6 = Staf::create([
            'name' => 'Xhulio Mitre',
            'bio' => 'Emri im është Xhulio Mitre, drejtues i departamentit TIK (Teknologji e Informacionit dhe Komunikimit) pranë Akademisë Momentum. Kam mbaruar studimet bachelor për Informatikë Ekonomike dhe studimet master për Sisteme Informacioni në Ekonomi. E kam filluar karrierën time si programues dhe zhvillues biznesi pranë një media-je online. Më pas, pata shancin të drejtoj departamentin e trajnimeve në një nga kompanitë më të mëdha software në Shqipëri. Aktualisht jam pedagog me kohë të plotë në Universitetin e Tiranës, Fakulteti i Ekonomisë. Prej shtatorit 2019, kam startuar Zero Tek Një, një kompani e fokusuar në Konsulencë Biznesi, Menaxhim Projekti dhe Trajnime Profesionale. Departamenti TIK që do të hapet së shpejti në Akademinë Momentum do të ofrojë përgatitje për një gamë të gjerë aftësish dhe eskpertize, si dhe mundësi reale për të punuar si zhvillues software, zhvillues web, administrator rrjeti, administrator databaze, analist sistemi, testues softuerik dhe pozicione të tjera të lidhura direkt dhe indirekt me IT.',
            'user_id' => '1',
            'image' => 'staf6.jpg',
            'post_id' => $post6->id,
        ]);

    }
}
