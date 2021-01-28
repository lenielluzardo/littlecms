<?php

namespace App\Models;

class Post
{
    public function getPosts($session)
    {
        if(!$session->has('posts')){
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }

    private function createDummyData($session)
    {
        $posts= [
            [   'id' => 1,
                'title' => 'THIS IS THE TITLE FROM DUMMY',
                'content' => [
                    'paragraph1' => 'Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos!',
                    'paragraph2' => 'Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos!',
                    'paragraph3' => 'Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolo',
                    'paragraph4' => 'Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolor nam autem. Ullam cumque quas ipsam
                    facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. A voluptates tenetur quibusdam explicabo nobis
                    eum aperiam impedit, libero architecto consequuntur
                    laborum dolo',
                ],
                'author'=> 'Leniel Luzardo',
                'created'=>'2020/12/01',
                'modified' => '2020/12/01',
                'rating'=> 4,
                'tags'=> [
                    'Software Development',
                    '.NET Core',
                    'ASP.NET'
                ],
                'images' => [
                    'url_1' => 'https://via.placeholder.com/500x400',
                    'url_2' => 'https://via.placeholder.com/500x400',
                    'url_3' => 'https://via.placeholder.com/500x400',
                    'url_2' => 'https://via.placeholder.com/500x400'
                ],
           ]
        ];

        $session->put('posts', $posts);
    }
}
