<?php

namespace App\Models;

class database
{
    static $laravel_tulisan = [

        [
            "judul" => "Manfaat lorem ipsum",
            "pengarang" => "Muhmmmad Naufal Hafizh",
            "id_tulisan" => "1",
            "tanggal" => "Kamis, 29 Juni 2021",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident cumque dicta, blanditiis, quidem praesentium voluptates voluptatum itaque eaque obcaecati molestiae in quasi, doloribus mollitia pariatur laudantium ipsum eveniet iure voluptas reiciendis explicabo cum. Ea cupiditate fugiat eos repudiandae obcaecati asperiores est nam exercitationem veniam ullam provident maxime non doloremque cum ipsam assumenda labore, architecto repellat necessitatibus. Ex ipsa neque magnam? Voluptas dolore deserunt rem, ab omnis aut doloribus soluta suscipit dolorem obcaecati sed, animi sunt provident, consequuntur et? Temporibus voluptatum tempore corporis perspiciatis eum porro, quasi incidunt quisquam deleniti sit recusandae velit reprehenderit sequi asperiores natus voluptates molestias eos voluptatem."
        ],

        [

            "judul" => "Manfaat lorem ipsum part 2",
            "pengarang" => "Muhmmmad Hafizh",
            "id_tulisan" => "2",
            "tanggal" => "Jumat, 30 Juni 2021",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi corrupti nesciunt, voluptatibus est at impedit hic soluta delectus eligendi exercitationem architecto quidem veritatis quis officiis, nobis placeat quae distinctio dignissimos molestiae omnis atque deserunt. Ipsum ab cupiditate amet dolorem aliquam quisquam, in aliquid maxime pariatur laboriosam at quam animi saepe praesentium ullam voluptatem dicta itaque exercitationem. Aperiam excepturi, ipsum, provident aliquid suscipit eum deserunt iste optio vitae, dolor sint explicabo? Similique iure deserunt quia quam accusamus perspiciatis, distinctio sapiente at consequuntur quaerat veritatis, enim expedita explicabo impedit neque porro architecto molestiae quo, praesentium ipsum. Distinctio, tempore quae ab iusto maiores ipsa, mollitia, quaerat vero dolores autem ipsum esse laboriosam corporis reprehenderit? Similique provident minus harum doloremque natus, non pariatur nihil aspernatur inventore odit ratione et quos atque autem repudiandae eius perspiciatis veniam. Necessitatibus architecto fuga voluptates aspernatur repellendus sint dolor facilis itaque deleniti. Rem minus, praesentium eveniet minima deserunt porro?"

        ]

    ];

    public static function all()
    {

        return collect(self::$laravel_tulisan);
    }

    public static function temukan($id_tulisan)
    {
        $post = static::all();

        // $tulisan_baru = [];
        // foreach ($post as $key) {

        //     if ($key["id_tulisan"] === $id_tulisan) {

        //         $tulisan_baru =  $key;
        //     }
        // }

        return $post->firstWhere('id_tulisan', $id_tulisan);
    }
}
