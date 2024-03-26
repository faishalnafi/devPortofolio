<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Napikk",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quos dolor consectetur nobis dicta nesciunt aspernatur minima alias voluptatibus neque fugiat omnis, ea maiores earum eaque maxime incidunt cum aliquid, praesentium esse. Id, doloremque aspernatur quod provident illum reprehenderit vitae debitis doloribus inventore ratione rem repellat voluptas exercitationem accusamus aliquam ut, delectus ad corporis illo? Amet nulla minima, provident magni repellendus et nesciunt voluptates porro illo voluptatem placeat vero cupiditate beatae sequi aspernatur aliquid vel vitae deserunt blanditiis magnam accusantium itaque! Facilis reiciendis iure nam, vel qui, eos atque a tempora perferendis sed beatae eum repellat quisquam deleniti cum in!"
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Ryan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam, doloremque nesciunt soluta facilis quia tenetur. Deleniti fuga saepe minus. Officia quaerat sequi culpa, neque ex porro unde praesentium voluptates doloribus vero nisi ea fugiat suscipit, consectetur saepe at? Atque perspiciatis eius fuga. Et placeat repellat soluta qui est quaerat modi perspiciatis asperiores saepe, iure, laborum enim odio cum culpa nihil quasi ab quia incidunt. Ipsa, praesentium quibusdam labore libero, laborum corporis culpa ex dolorum omnis ipsum cum dolore dolores iusto dolor est exercitationem. Esse iusto provident ipsam sequi veniam quam debitis et, eius molestias cumque voluptates praesentium nesciunt id rem quo at nisi ullam quibusdam quaerat incidunt quas! Debitis dolorem minus error facere voluptatibus modi quis sit, inventore voluptates illo labore facilis. Veniam, ipsa facilis. Reprehenderit alias facere dolor eum dignissimos quasi unde, quae mollitia! Explicabo, quod? Repellendus quod asperiores vitae quia aperiam laborum eaque facere iste harum animi ratione consectetur nesciunt ullam, dolorum iusto quidem delectus exercitationem recusandae est et illum voluptatum adipisci non laboriosam. Omnis necessitatibus quas consequuntur ratione quidem blanditiis consequatur reprehenderit unde. Nulla quas in velit porro iste similique quisquam, natus, repellat amet dolore perferendis dolorem ea omnis, nostrum pariatur sequi voluptate quam ex blanditiis!"
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}