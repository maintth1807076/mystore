<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Anime Your Lie in April Miyazono Kaori ',
                'price' => '1200000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
                Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2018-01-11 10:37:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => ' Anime LoveLive School Idol Festival Lace Maki Nishikino',
                'price' => '290000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC .
                Kích thước: 22cm / 9 .
                Sản xuất: Trung Quốc',
                'category_id' => 1,
                'created_at' =>'2019-01-01 11:20:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => '15.5CM Naruto Kakashi Anime Action Figure Model In PVC collection doll toy new',
                'price' => '340000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2018-02-12 12:30:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'name' => 'Anime Fate Grand Order Double Lancer Scathach',
                'price' => '345000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
                Tình trạng: Full box',
                'category_id' => 1,
                'created_at' =>'2018-03-13 13:40:02',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 5,
                'name' => 'Touhou Project Koumajou Densetsu Second Remilia Scarlet',
                'price' => '750000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2018-04-14 14:50:04',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 6,
                'name' => ' Sword Art Online Asuna ',
                'price' => '780000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
              Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2018-05-15 15:10:06',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 7,
                'name' => ' ARTFX J Black Butler Book of Circus Ciel Phantomhive 1/8 PVC Figure Kotobukiya',
                'price' => '390000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
                Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' =>'2018-06-16 16:37:31',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 8,
                'name' => ' Union Creative Nical statue No.15 GANTZ:O Reika X Shotgun',
                'price' => '420000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2018-07-17 17:37:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 9,
                'name' => ' Anime Attack on TITAN Levi',
                'price' => '445000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
                Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2018-08-18 18:12:07',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 10,
                'name' => ' Pokemon Detective Pikachu Cosplay Deadpool PVC Figure Statues Desk Decorr',
                'price' => '395000',
                'description' => 'Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: Nhựa PVC cao cấp bền màu.
                Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 1,
                'created_at' => '2019-02-12 13:20:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 11,
                'name' => 'Anime Himouto Umaru-chan Doma Umaru',
                'price' => '1200000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' =>'2018-09-19 19:36:09',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 12,
                'name' => 'PLAYERUNKNOWNS BATTLEGROUNDS The Lone Survivor',
                'price' => '1100000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2018-10-01 06:17:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 13,
                'name' => 'Nendoroid Lot Of Two 504 Kankazi Tomoyo And 406 Miss Monochrome Used OOB Anime',
                'price' => '2500000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' =>'2018-11-02 07:11:10',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 14,
                'name' => 'Fate Grand Order FGO Merlin Nendoroid Figure No.970',
                'price' => '4550000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2018-12-03 08:32:11',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 15,
                'name' => 'Nendoroid 309 Mahoutsukai no Yoru Alice Kuonji Figure',
                'price' => '7500000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' =>'2018-01-01 09:00:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 16,
                'name' => 'Nendoroid 705 Anime My Hero Academia Bakugou Katsuki PVC Figure Toy Gift IN BOX',
                'price' => '7500000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2018-02-02 10:20:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 17,
                'name' => 'Nendoroid 682 Anime Naruto Shippuden Uzumaki Naruto PVC Figure New In Box',
                'price' => '200000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2019-08-19 04:20:11',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 18,
                'name' => 'Anime Nendoroid 796 Fullmetal Alchemist Alphonse Elric PVC Action Figure iN Box',
                'price' => '300000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2018-03-04 22:44:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 19,
                'name' => 'Nendoroid 908 Houkai 3rd: Sakura Yae Heretic Miko Figure Figurine New No Box',
                'price' => '450000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2019-06-17 11:45:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 20,
                'name' => 'Good Smile Company Nendoroid That Time I Got Reincarnated as a Slime Rimuru',
                'price' => '769000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 2,
                'created_at' => '2019-07-21 12:26:31',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 21,
                'name' => ' Marvel The Avengers Iron Man Max Factory Figma 217 PVC Action Figure Toy',
                'price' => '769000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-04-04 20:07:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 22,
                'name' => ' Anime Figma243 Snake Metal Gear Solid 2 Sons Of Liberty PVC Figure Toys',
                'price' => '1200000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-05-05 22:37:08',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 23,
                'name' => 'The Legend of Zelda: Skyward Sword Link Figma Action Figure Toy In Box Decors US',
                'price' => '900000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-06-06 23:00:00',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 24,
                'name' => 'Figma 367 Bloodborne Hunter Action Figure Model 6" Toy Gift New in Box Halloween',
                'price' => '600000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' =>'2018-07-07 12:35:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 25,
                'name' => 'Figma #417 Queen (Makoto Niijima) Persona 5 Good Smile Company Authentic',
                'price' => '550000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-08-08 13:37:09',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 26,
                'name' => 'Anime Figma 393 OW Overwatch Reaper PVC Action Figure New In Box',
                'price' => '600000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-09-09 10:24:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 27,
                'name' => 'New in Box 14CM Guitar Hatsune Miku PVC Action Anime Figure Toy Figma 200',
                'price' => '1100000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' =>'2019-03-20 15:05:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 28,
                'name' => 'MY-C-BK-RD: FIGLot Cape for Figma Berserk Guts "Band of The Hawk" (No Figure)',
                'price' => '1050000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-09-09 14:47:45',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 29,
                'name' => 'Good Smile Overwatch Zenyatta Figma Action figure Pre Order
',
                'price' => '300000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2018-10-10 10:00:30',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 30,
                'name' => 'Marvel The Avengers Thor 16cm PVC Action Figure Figma',
                'price' => '400000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 3,
                'created_at' => '2019-04-24 08:10:05',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 31,
                'name' => 'Amazing Marvel Revoltech DEADPOOL X-Men Action Figure Toy Gift New',
                'price' => '120000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-11-11 15:22:12',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 32,
                'name' => 'Marvel Spider-Man Venom Edward Brock Revoltech PVC Action Figure Model Toys Gift',
                'price' => '316000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-12-12 15:30:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 33,
                'name' => 'Kaiyodo Revoltech Amazing Yamaguchi Spider-Gwen Action Figure Toy Xmas Kids Gift',
                'price' => '550000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-01-20 17:01:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 34,
                'name' => 'Kaiyodo Revoltech Amazing Yamaguchi Wolverine Action Figure X-Men Toy New in Box',
                'price' => '300000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' =>'2018-02-21 18:44:14',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 35,
                'name' => 'SCI-FI Revoltech The Nightmare Before Christmas Jack Skellington Figure NO BOX',
                'price' => '500000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-03-22 19:37:11',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 36,
                'name' => 'Kaiyodo Amazing Yamaguchi No.012 Gambit Revoltech Action Figure New Toy gift',
                'price' => '800000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-04-24 14:47:24',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 37,
                'name' => 'Kaiyodo Revoltech Amazing Yamaguchi Comic Captain America Action Figure Toy New',
                'price' => '670000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-05-05 20:28:32',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 38,
                'name' => 'Kaiyodo Revoltech Star Wars Revo Darth Vader Figure Complex Sci-fi Model in Box',
                'price' => '400000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' =>'2018-06-26 21:45:33',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 39,
                'name' => 'Amazing Yamaguchi Revoltech No.010 X-Men Psylocke PVC Action Figure New In Box',
                'price' => '500000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2018-07-27 02:07:01',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 40,
                'name' => 'KAIYODO REVOLTECH Figure Complex Movie Revo Series No.010 Zootopia Nick Wilde',
                'price' => '900000 ',
                'description' => '
                Trang trí hoàn hảo cho bàn làm việc hoặc phòng làm việc, phòng ngủ, phòng khách của bạn. Là một món quà đặc biệt dành  cho bạn của bạn!',
                'detail' => 'Chất liệu: PVC chất lượng tốt.
               Một mặt hàng hoàn toàn mới, chưa sử dụng, chưa mở, không bị hư hại (bao gồm cả các mặt hàng thủ công)',
                'category_id' => 4,
                'created_at' => '2019-05-12 10:33:20',
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
        DB::statement("ALTER SEQUENCE products_id_seq RESTART WITH 41");
    }
}
