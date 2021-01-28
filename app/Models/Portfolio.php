<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function getProjects($session)
    {
        if(!$session->has('project')){
            $this->createDummyData($session);
        }
        return $session->get('project');
    }

    private function createDummyData($session)
    {
        $project= [
            1 =>[
                'id' => 1,
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
                ]
            ],
            2 =>[
                'id' => 2,
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
                ]
            ],
            3 =>[
                'id' => 3,
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
                ]
            ],
            4 =>[
                'id' => 4,
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
                ]
            ],
            5 =>[
                'id' => 5,
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
                ]
            ],
            6 =>[
                'id' => 6,
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
                ]
            ],
            7 =>[
                'id' => 7,
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
                ]
            ],
            8 =>[
                'id' => 8,
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
                ]
            ],
            9 =>[
                'id' => 9,
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
                ]
            ],
            10 =>[
                'id' => 10,
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
                ]
            ],
            11 =>[
                'id' => 11,
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
                ]
            ],
            12 =>[
                'id' => 12,
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
                ]
            ]

        ];

        $session->put('project', $project);
    }
}
