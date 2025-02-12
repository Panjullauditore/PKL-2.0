<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $placesData = [
            // Previous entries (Hotels, Culinary, Shopping, Entertainment)
            [
                'name' => 'Hotel Tentrem Semarang',
                'phonenum' => '+622486005555',
                'email' => 'info.semarang@hoteltentrem.com',
                'location' => 'Jl. Gajahmada No.123, Semarang',
                'desc' => '5-star luxury hotel in downtown Semarang',
                
            ],
            [
                'name' => 'Quest Hotel Semarang',
                'phonenum' => '+62243520808',
                'email' => 'SimpangLimaInfo@Quest-Hotels.com',
                'location' => 'Jl. Plampitan No.37-39, Semarang',
                'desc' => 'Modern business hotel in central location',
                
            ],
            [
                'name' => 'Louis Kienne Pandanaran',
                'phonenum' => '(024) 86453888',
                'email' => 'Info@louisworldwide.com',
                'location' => 'Jl. Pandanaran No.18, Semarang',
                'desc' => 'Serviced apartment style accommodation',
                
            ],
            [
                'name' => 'Mie Ayam Plombokan',
                'phonenum' => '+6288980516870',
                'email' => '',
                'location' => 'Jl. Raya Semarang - Gubug Km. 13, Bandungrejo, Mranggen, Demak Regency',
                'desc' => 'Mie Ayam Plombokan is a typical chicken noodle dish served with chewy noodles, savory shredded chicken, and a rich broth.',
                
            ],
            [
                'name' => 'Tahu Gimbal Pak Edy',
                'phonenum' => '+6281329407509',
                'email' => '',
                'location' => 'Jl. Pandanaran No.2, Mugassari, Semarang',
                'desc' => 'Famous street food with unique peanut sauce',
                
            ],
            [
                'name' => 'Gudeg Koyor Mbak Tum',
                'phonenum' => '+6281222770047',
                'email' => '',
                'location' => 'Jl. MT. Haryono, Wonodri, Semarang',
                'desc' => 'Snug, simple eatery offering a cash-only menu of classic Javanese fare served till late.',
                
            ],
            [
                'name' => 'Lumpia Cik Me Me',
                'phonenum' => '+6285100000727',
                'email' => '',
                'location' => 'Jl. Gajahmada No.107, Miroto',
                'desc' => 'Unpretentious restaurant & shop specializing in rolls filled with crab, vegetables & fish.',
                
            ],
            [
                'name' => 'Bandeng Juwana',
                'phonenum' => '+62811277575',
                'email' => '',
                'location' => 'Jl. Pandanaran No.57, Randusari, Semarang',
                'desc' => 'Premium milkfish dishes and souvenirs',
                
            ],
            [
                'name' => 'Dusun Semilir',
                'phonenum' => '(024) 6789-0123',
                'email' => 'info@dusunsemilir.com',
                'location' => 'Jl. Soekarno-Hatta No.49, Bawen',
                'desc' => 'Eco-friendly tourist attraction with parks, cafes, fun rides, and interesting photo spots at the foot of Mount Ungaran.',
                
            ],
            [
                'name' => 'Saloka Theme Park',
                'phonenum' => '(024) 5432-1098',
                'email' => 'booking@salokathemepark.com',
                'location' => 'Jl. Fatmawati No. 154, Tuntang',
                'desc' => 'Largest amusement park in Central Java, offering exciting rides and attractions for all ages.',
                
            ],
            [
                'name' => 'HW Tiget Club',
                'phonenum' => '(024) 7890-1234',
                'email' => 'reservations@hwtigerclub.com',
                'location' => 'Jl. Cendrawasih No.24, Tj. Mas, Semarang',
                'desc' => 'Famous nightlife venue with an energetic atmosphere, DJ music, and exciting events.',
                
            ],
            [
                'name' => 'Babyface Karaoke',
                'phonenum' => '(024) 2345-6789',
                'email' => 'booking@babyfacekaraoke.com',
                'location' => 'Blok E1/8, Jl. Anjasmoro Raya No.8, Tawangsari, Semarang',
                'desc' => 'Popular karaoke venue offering a wide selection of songs and comfortable rooms.',
                
            ],
            
            // Tourist Attractions
            [
                'name' => 'Lawang Sewu',
                'phonenum' => '(024) 3456-7890',
                'email' => 'info@lawangsewu.com',
                'location' => 'Jl. Pemuda No.160, Semarang',
                'desc' => 'A historic building with rich cultural significance, famous for its architectural beauty and historical importance.',
                
            ],
            [
                'name' => 'Sam Poo Kong Temple',
                'phonenum' => '(024) 5678-9012',
                'email' => 'contact@sampoookong.com',
                'location' => 'Jl. Simongan No.129, Semarang',
                'desc' => 'A historic Chinese temple complex showcasing beautiful traditional architecture and cultural heritage.',
                
            ],
            [
                'name' => 'Old Town (Kota Lama)',
                'phonenum' => '(024) 7890-1234',
                'email' => 'tourism@kotalama.semarang.go.id',
                'location' => 'Jl. Letjen Suprapto No.4, Semarang',
                'desc' => 'A beautiful colonial building in the historic Old Town district, representing Dutch architectural heritage.',
                
            ],
            [
                'name' => 'Tugu Muda Monument',
                'phonenum' => '(024) 2345-6789',
                'email' => 'info@tugumuda.semarang.go.id',
                'location' => 'Simpang Lima, Semarang',
                'desc' => 'An iconic monument symbolizing the spirit of struggle during the Indonesian independence movement.',
                
            ],
            [
                'name' => 'Grand Mosque of Central Java',
                'phonenum' => '(024) 8888-1234',
                'email' => 'info@masjidagung.id',
                'location' => 'Jl. Gajah Raya, Gayamsari, Semarang',
                'desc' => 'Magnificent mosque featuring stunning Islamic architecture and spacious prayer halls.',
            ],
            [
                'name' => 'Brown Canyon',
                'phonenum' => '(024) 3333-9999',
                'email' => 'info@browncanyon.id',
                'location' => 'Rowosari, Tembalang, Semarang',
                'desc' => 'Former quarry turned into a beautiful canyon with stunning views and photo opportunities.',
            ],
            [
                'name' => 'Goa Kreo',
                'phonenum' => '(024) 4444-8888',
                'email' => 'tourism@goakreo.com',
                'location' => 'Kandri, Gunungpati, Semarang',
                'desc' => 'Historic cave with legendary tales and beautiful surrounding reservoir.',
            ],
            [
                'name' => 'Harris Hotel Semarang',
                'phonenum' => '(024) 9999-1111',
                'email' => 'info@harrissemarang.com',
                'location' => 'Jl. Ahmad Yani No.138, Semarang',
                'desc' => 'Modern business hotel with comfortable amenities and strategic location.',
            ],
            [
                'name' => 'Novotel Semarang',
                'phonenum' => '(024) 2222-3333',
                'email' => 'reservation@novotelsemarang.com',
                'location' => 'Jl. Pemuda No.123, Semarang',
                'desc' => 'International standard hotel with excellent facilities and city views.',
            ],
            [
                'name' => 'Waroeng Semawis',
                'phonenum' => '(024) 6666-7777',
                'email' => 'info@waroengsemawis.com',
                'location' => 'Jl. Gang Warung, Semarang',
                'desc' => 'Night market featuring various local delicacies and cultural items.',
            ],
            [
                'name' => 'Semarang Contemporary Art Gallery',
                'phonenum' => '(024) 5555-4444',
                'email' => 'gallery@semarangart.com',
                'location' => 'Jl. Soekarno-Hatta No.55, Semarang',
                'desc' => 'Modern art gallery showcasing local and international contemporary artwork.',
            ],
            [
                'name' => 'Semarang Water Blaster',
                'phonenum' => '(024) 8888-9999',
                'email' => 'fun@waterblaster.com',
                'location' => 'Jl. Marina Raya, Semarang',
                'desc' => 'Water park with exciting slides and pools for family entertainment.',
            ],
            [
                'name' => 'Puri Maerokoco',
                'phonenum' => '(024) 7777-6666',
                'email' => 'info@purimaerokoco.com',
                'location' => 'Jl. Anjasmoro, Semarang',
                'desc' => 'Cultural park featuring miniature traditional houses from Central Java.',
            ],
            [
                'name' => 'Semarang Zoo',
                'phonenum' => '(024) 3333-2222',
                'email' => 'zoo@semarang.go.id',
                'location' => 'Jl. Tegalsari, Semarang',
                'desc' => 'Zoo featuring various animals and educational programs.',
            ],
            [
                'name' => 'Swiss-Belhotel Semarang',
                'phonenum' => '(024) 4444-5555',
                'email' => 'reservations@swiss-belhotelsemarang.com',
                'location' => 'Jl. Abdulrahman Saleh No.1, Semarang',
                'desc' => 'Premium hotel offering luxury accommodations and meeting facilities.',
            ],
            [
                'name' => 'Semarang Night Carnival',
                'phonenum' => '(024) 9999-7777',
                'email' => 'carnival@semarang.com',
                'location' => 'Simpang Lima, Semarang',
                'desc' => 'Evening entertainment venue with rides and games.',
            ],
            [
                'name' => 'Horison Ultima Semarang',
                'phonenum' => '(024) 1111-2222',
                'email' => 'info@horisonultimasemarang.com',
                'location' => 'Jl. MT. Haryono No.972, Lamper Kidul',
                'desc' => 'Comfortable hotel with modern amenities and business facilities.',
            ],
            [
                'name' => 'Semarang Convention Center',
                'phonenum' => '(024) 2222-4444',
                'email' => 'events@semarangcc.com',
                'location' => 'Jl. Marina No.8, Semarang',
                'desc' => 'Large convention center hosting various events and exhibitions.',
            ],
            [
                'name' => 'Kampung Pelangi',
                'phonenum' => '(024) 5555-6666',
                'email' => 'info@kampungpelangi.id',
                'location' => 'Jl. DR. Sutomo No.89, Semarang',
                'desc' => 'Colorful village known for its rainbow-painted houses and cultural activities.',
            ],
            [
                'name' => 'Museum Ronggowarsito',
                'phonenum' => '(024) 7777-8888',
                'email' => 'museum@ronggowarsito.com',
                'location' => 'Jl. Abdulrahman Saleh No.1, Semarang',
                'desc' => 'Historical museum showcasing Javanese culture and artifacts.',
            ],
            [
                'name' => 'Paragon Mall',
                'phonenum' => '(024) 8888-2222',
                'email' => 'cs@paragonmall.com',
                'location' => 'Jl. Pemuda No.118, Semarang',
                'desc' => 'Modern shopping mall with various retail outlets and entertainment options.',
            ],
            [
                'name' => 'Gedong Songo Temple',
                'phonenum' => '(024) 6666-5555',
                'email' => 'tourism@gedongsongo.com',
                'location' => 'Candi Gedong Songo, Bandungan',
                'desc' => 'Ancient Hindu temple complex with stunning mountain views.',
            ],
            [
                'name' => 'Marina Beach',
                'phonenum' => '(024) 9999-8888',
                'email' => 'info@marinasemarang.com',
                'location' => 'Jl. Marina, Semarang',
                'desc' => 'Coastal recreation area with various water activities.',
            ],
            [
                'name' => 'Sky Dining Restaurant',
                'phonenum' => '(024) 8888-3333',
                'email' => 'reservation@skydining.com',
                'location' => 'Jl. Sisingamangaraja No.15, Semarang',
                'desc' => 'Rooftop restaurant offering panoramic city views.',
            ],
            [
                'name' => 'Green Valley Resort',
                'phonenum' => '(024) 2222-5555',
                'email' => 'booking@greenvalley.com',
                'location' => 'Jl. Ungaran Barat, Semarang',
                'desc' => 'Mountain resort with outdoor activities and cool climate.',
            ],
            [
                'name' => 'Heritage Coffee House',
                'phonenum' => '(024) 7777-3333',
                'email' => 'coffee@heritage.com',
                'location' => 'Jl. Pemuda No.56, Semarang',
                'desc' => 'Vintage coffee shop in a restored colonial building.',
            ],
            [
                'name' => 'Flower Garden Park',
                'phonenum' => '(024) 1111-4444',
                'email' => 'garden@flowerpark.com',
                'location' => 'Jl. Tlogosari Raya, Semarang',
                'desc' => 'Beautiful botanical garden featuring various flower species.',
            ],
            [
                'name' => 'Javanese Culture Center',
                'phonenum' => '(024) 3333-8888',
                'email' => 'info@javaculture.com',
                'location' => 'Jl. Diponegoro No.45, Semarang',
                'desc' => 'Cultural center showcasing traditional Javanese arts.',
            ],
            [
                'name' => 'Historic Train Station',
                'phonenum' => '(024) 1111-7777',
                'email' => 'info@historictrain.com',
                'location' => 'Jl. Tawang No.1, Semarang',
                'desc' => 'Preserved colonial-era train station with museum.',
            ],
            [
                'name' => 'Bamboo Eco Resort',
                'phonenum' => '(024) 3333-9999',
                'email' => 'stay@bambooresort.com',
                'location' => 'Jl. Ungaran Selatan, Semarang',
                'desc' => 'Eco-friendly resort built with sustainable materials.',
            ],
            [
                'name' => 'Sky Bridge Pandanaran',
                'phonenum' => '(024) 7777-5555',
                'email' => 'info@skybridge.com',
                'location' => 'Jl. Pandanaran, Mugassari, Semarang',
                'desc' => 'Elevated park with walking trails and city views.',
            ],
            [
                'name' => 'Taman Indonesia Kaya',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Jl. Menteri Supeno No.11 A, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249',
                'desc' => 'Small park with street food stalls, nighttime light shows & an outdoor stage for live performances.',
            ],
            [
                'name' => 'Museum Akpol',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Gajahmungkur, Semarang City, Central Java 50232',
                'desc' => 'Aset Gedung Museum Akademi Kepolisian (Akpol) beserta fasilitas penunjang dan benda-benda koleksi dari Pusat Sejarah Kepolisian Negara Republik Indonesia (Pusjarah Polri) secara resmi diserahkan kepada Akademi Kepolisian. Acara serah terima dilaksanankan di Gedung baru museum Akademi Kepolisian yang juga terletak di dalam ksatrian Akpol.',
            ],
            [
                'name' => 'Monumen Ketenangan Jiwa',
                'phonenum' => '-',
                'email' => '-',
                'location' => '392W+HFQ, Semarang City, Central Java 50177',
                'desc' => 'Indonesia memiliki sejarah panjang dalam perjuangan meraih kemerdekaan. Oleh karenanya tak heran jika di Indonesia banyak monumen yang menandai kisah perjuangan itu, tak terkecuali di Kota Semarang, Jawa Tengah (Jateng).',
            ],
            [
                'name' => 'Museum Rekor Dunia-Indonesia (MURI) Semarang',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Jl. Perintis Kemerdekaan No.275, Srondol Kulon, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50263',
                'desc' => 'Museum Rekor Dunia Indonesia – MURI mengkoleksi catatan rekor maupun prestasi luar biasa yang dimiliki oleh orang orang di Indonesia. Berkunjung ke museum gratis tanpa dipungut biaya, buka setiap hari kerja Senin sampai Jumat mulai pukul 09.00 sampai dengan pukul 14.00. Sedangkan untuk kunjungan siswa sekolah atau rombongan turis, sebaiknya membuat reservasi terlebih dahulu.',
            ],
            [
                'name' => 'Ereveld Candi',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Jl. Slamet, Gajahmungkur, Kota Semarang',
                'desc' => 'Ereveld Candi merupakan sebuah pemakaman yang terletak di kawasan Candisari. Ereveld Candi sendiri adalah pemakaman bagi korban militer Belanda yang gugur saat berperang selama Perang Dunia Kedua dan juga Perang Kemerdekaan yang mayoritasnya merupakan korban perang yang terjadi di kawasan Jawa Tengah. Ereveld Candi kini menjadi sebuah tempat pembelajaran sejarah dan juga sebagai salah satu destinasi wisata yang unik yang terletak di Kota Semarang.',
            ],
            [
                'name' => 'Pasar Djohar',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Jl. K.H. Agus Salim, Kauman, Kota Semarang',
                'desc' => 'Pasar Djohar merupakan salah satu bangunan bersejarah di Kota Semarang. Tak hanya kaya akan nilai ekonomi, tetapi juga memiliki nilai historis di Kota Semarang. ',
            ],
            [
                'name' => 'Mercusuar Willem III',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Jl. Yos Sudarso, Semarang Utara',
                'desc' => 'Mercusuar Willem III adalah salah satu destinasi wisata yang menarik di Kota Semarang. Mercusuar ini memiliki sejarah yang panjang dan menarik, karena dibangun pada tahun 1858 oleh pemerintah kolonial Belanda. Mercusuar Willem III juga merupakan mercusuar tertua di Indonesia dan masih beroperasi hingga saat ini. Selain itu, mercusuar ini memiliki arsitektur yang indah dan menarik, dengan ketinggian mencapai 50 meter. Pengunjung dapat menikmati pemandangan Kota Semarang dari atas mercusuar, yang pastinya akan memberikan pengalaman yang tak terlupakan.',
            ],
            [
                'name' => 'Oudetrap',
                'phonenum' => '-',
                'email' => '-',
                'location' => 'Jl. R. Suprapto Taman Srigunting Kota Lama',
                'desc' => 'Gedung Oudetrap terletak di Jalan Taman Srigunting nomor 3B, dengan ciri memiliki tangga spiral di depan gedung, yang dibangun pada tahun 1834. Gedung Oudetrap yang terdiri atas dua lantai, dengan luas lahan 1.196 meter persegi, dan memiliki luas bangunan 1.420 meter persegi.',
            ],
            [
                'name' => 'Rooms Inc Hotel',
                'phonenum' => '(024) 86001200',
                'email' => '-',
                'location' => 'Jl. Pemuda No.150 Semarang',
                'desc' => 'Rooms Inc Hotel Pemuda Semarang yang hanya berselang 5 menit berjalan kaki dari Lawang Sewu menawarkan akomodasi cantik di tengah Kota Semarang. Hotel ini memiliki dua restoran, fasilitas pertemuan dan akses WiFi gratis di seluruh area.',
            ],
            [
                'name' => 'Pop! Hotel',
                'phonenum' => '(024) 86042222',
                'email' => '-',
                'location' => 'Jl. Simpang No.09, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132',
                'desc' => 'Hotel Pop Semarang menawarkan beberapa fasilitas yang dapat Anda gunakan seperti bar, kafe, lounge, dan wifi.',
            ],
            [
                'name' => 'Awann Sewu Boutique Hotel & Suite',
                'phonenum' => '(024) 3511000',
                'email' => 'info@awanngroup.com',
                'location' => 'Jl. Simpang No.11, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132',
                'desc' => 'Hotel dengan nuansa maskulin. Atrium megah. Pemandangan rooftop 360°. Tersedia kolam renang, bar cafe, ruang bermain anak, resto, dan wine room.',
            ],
            [
                'name' => 'Aston Inn Pandanaran',
                'phonenum' => '(024) 76442237',
                'email' => 'pandanaraninfo@astonhotelsinternational.com',
                'location' => 'Jl. Pandanaran No.40, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134   ',
                'desc' => 'ASTON Inn Pandanaran adalah hotel bintang 4 yang terletak di Semarang, Indonesia.',
            ],
            [
                'name' => 'Hotel Grasia',
                'phonenum' => '(024) 8444777',
                'email' => 'info@hotelgrasia.com',
                'location' => 'Jl. Letnan Jenderal S. Parman No.29, Gajahmungkur, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50231',
                'desc' => 'Hotel Grasia adalah hotel bintang tiga dengan konsep halal hotel, terletak di kawasan Gajahmungkur dilengkapi dengan 116 kamar yang dilengkapi fasilitas pendukung untuk mewujudkan istirahat yang berkualitas. 14 ruang pertemuan dan masjid yang luas, kami siapkan untuk mengakomodir setiap kegiatan anda dan kolega.',
            ],
            [
                'name' => 'Up-Peak Hotel Semarang (Formerly HA-KA Hotel)',
                'phonenum' => '(024) 30000285',
                'email' => '-',
                'location' => 'Jl. Ahmad Yani No.173, Wonodri, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242',
                'desc' => 'Up-Peak Hotel Simpang Lima Semarang Powered by Archipelago adalah hotel di lokasi yang baik, tepatnya berada di Wonodri.',
            ],
            [
                'name' => 'Padma Hotel Semarang',
                'phonenum' => '(024) 33000900',
                'email' => 'reservation.semarang@padmahotels.com',
                'location' => 'Jl. Sultan Agung No.86, Wonotingal, Kec. Candisari, Kota Semarang, Jawa Tengah 50252',
                'desc' => 'Padma Hotel Semarang adalah hotel di lokasi yang baik, tepatnya berada di Candisari. Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda. WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.',
            ],
            [
                'name' => 'Pesta Keboen Restoran',
                'phonenum' => '(024) 8310620',
                'email' => '-',
                'location' => 'Jl. Veteran No.29, Lempongsari, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50231',
                'desc' => 'Straightforward restaurant serving classic Javanese dishes amid bright, traditional decor.',
            ],
            [
                'name' => 'Spiegel All Day Bar & Dining',
                'phonenum' => '081228068785',
                'email' => '',
                'location' => 'Jl. Letjen Suprapto No.34, Tj. Mas, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50174',
                'desc' => 'Salah satu tempat nongkrong dan minum yang di rekomendasi di daerah kota tua Semarang.',
            ],
            [
                'name' => 'Ayam Bakar Primarasa',
                'phonenum' => '(024) 3510505',
                'email' => '-',
                'location' => 'Jl. Gajahmada No.99D, Miroto, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134',
                'desc' => 'Ayam Bakar Primarasa Semarang is a great place to spend your time with your family. It has a spacious dining area with large parking site.',
            ],
            [
                'name' => 'Fat Elephant Restaurant & Coffee Shop',
                'phonenum' => '(024) 86405777',
                'email' => '',
                'location' => 'Jl. Gajahmada No.101, Miroto, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134',
                'desc' => '"24 Hours Restaurant with Fusion Asian Food and Coffee blend from Bukamata, at the Ground Level of ARTOTEL Gajahmada - Semarang"',
            ],
            [
                'name' => 'Aroem Restaurant & Ballroom',
                'phonenum' => '08112917000',
                'email' => '-',
                'location' => 'Jl. Dr. Wahidin No.213, Kaliwiru, Kec. Candisari, Kota Semarang, Jawa Tengah 50253',
                'desc' => 'Restoran ini menyajikan menu masakan Indonesia dan Chinese yang lezat. Dengan suasana yang nyaman, restoran ini cocok untuk acara keluarga, reuni, dan acara kantor.',
            ],
            [
                'name' => 'The Tavern',
                'phonenum' => '(024) 8503099',
                'email' => '-',
                'location' => 'Jl. Rinjani No.1, Jawa Tengah, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50232',
                'desc' => 'Tempat makan yg modern dan santai menyajikan aneka hidangan khas western dan asia, dan cocktail.',
            ],
            [
                'name' => 'Grand Masterpiece Karaoke',
                'phonenum' => '08156978888',
                'email' => '',
                'location' => 'Jl. Sultan Agung No.98, Wonotingal, Kec. Candisari, Kota Semarang, Jawa Tengah 50252',
                'desc' => 'Serves great cocktails, Has karaoke, Serves food at bar',
            ],
            [
                'name' => 'Masterpiece KTV DP Mall',
                'phonenum' => '(024) 86578008',
                'email' => '',
                'location' => 'Jl. Pemuda No.150 Lt.2, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132',
                'desc' => 'Grand Masterpiece di design dengan konsep interior yang didominasi warna GOLD menjadikan Grand Masterpiece mewah dan glamour.',
            ],
            [
                'name' => 'Anak Panah Coffee',
                'phonenum' => '(024) 3564935',
                'email' => '-',
                'location' => 'Jl. Gajahmada No.91, Miroto, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134',
                'desc' => 'Anak Panah Coffee is a cozy coffee shop located in the heart of Semarang. It offers a variety of coffee drinks, snacks, and desserts in a relaxed and comfortable setting.',
            ],
            [
                'name' => 'Oleh Oleh 52 Semarang',
                'phonenum' => '0247617762',
                'email' => '',
                'location' => 'Karangayu, Jl. Jenderal Sudirman No.134, Cabean, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50141',
                'desc' => 'OLEH OLEH 52 SEMARANG adalah tempat belanja oleh oleh khas Semarang yang menyediakan berbagai macam oleh oleh khas Semarang yang lezat dan enak.',
            ],
            [
                'name' => 'Wingko Babad Cap Kereta Api',
                'phonenum' => '0243542064',
                'email' => '-',
                'location' => 'Jl. Cendrawasih No.14, Purwodinatan Timur, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50137',
                'desc' => 'Wingko Babad Cap Kereta Api adalah oleh-oleh khas Semarang yang terkenal dengan rasa yang lezat dan khas.',
            ],
            [
                'name' => 'Moaci Gemini',
                'phonenum' => '082292296321',
                'email' => '-',
                'location' => 'Jl. RA. Kartini No.19, Karangturi, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124',
                'desc' => 'Moaci Gemini adalah oleh oleh khas Semarang yang terkenal dengan rasa yang lezat dan khas.',
            ],
            [
                'name' => 'Toko Oleh Oleh Anugerah Wingko Babat Pak Moel',
                'phonenum' => '081229383727',
                'email' => '-',
                'location' => 'Jl. Batan Miroto III No.405, Miroto, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134',
                'desc' => 'Toko oleh oleh Anugerah merupakan cabang kedua Toko Wingko Babat Pak Moel. Menyediakan berbagai macam makanan khas dari Semarang dan Jawa Tengah seperti Wingko Babat Pak Moel, Moaci Gemini, Lunpia, Bandeng Presto, Tahu Bakso, dll.',
            ],
            [
                'name' => 'Loenpia Mbak Lien',
                'phonenum' => '0816664952',
                'email' => '-',
                'location' => 'Jl. Pemuda Gg. Grajen No.1, Pandansari, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50138',
                'desc' => 'Loenpia Mbak Lien adalah oleh oleh khas Semarang yang terkenal dengan rasa yang lezat dan khas.',
            ]
        ];

        DB::table('places')->insert($placesData);
    }
}