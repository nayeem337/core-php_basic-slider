<?php


namespace App\classes;


class Blog
{
    public $blogs = [], $result = [];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id'            => 1,
                'category_id'   => 1,
                'title'         => 'This is blog title one',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consectetur dicta dolore ducimus explicabo ipsam iure, minus neque perspiciatis porro quas rerum similique temporibus voluptatem. Ab blanditiis ratione rem.',
                'slider_image'  => '1.jpg',
                'image'         => 'blog-1.jpg'
            ],
            1 => [
                'id'            => 2,
                'category_id'   => 1,
                'title'         => 'This is blog title two',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consectetur dicta dolore ducimus explicabo ipsam iure, minus neque perspiciatis porro quas rerum similique temporibus voluptatem. Ab blanditiis ratione rem.',
                'slider_image'  => '2.jpg',
                'image'         => 'blog-2.jpg'
            ],
            2 => [
                'id'            => 3,
                'category_id'   => 2,
                'title'         => 'This is blog title three',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consectetur dicta dolore ducimus explicabo ipsam iure, minus neque perspiciatis porro quas rerum similique temporibus voluptatem. Ab blanditiis ratione rem.',
                'slider_image'  => '3.jpg',
                'image'         => 'testimonial-1.jpg'
            ],
            3 => [
                'id'            => 4,
                'category_id'   => 3,
                'title'         => 'This is blog title four',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consectetur dicta dolore ducimus explicabo ipsam iure, minus neque perspiciatis porro quas rerum similique temporibus voluptatem. Ab blanditiis ratione rem.',
                'slider_image'  => '4.jpg',
                'image'         => 'testimonial-2.jpg'
            ],
        ];
    }

    public function getAllBlog()
    {
        return $this->blogs;
    }

    public function getAllCategoryBlog($categoryId)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['category_id'] == $categoryId)
            {
                array_push($this->result, $blog);
            }
        }
        return $this->result;
    }

    public function getBlogById($blogId)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $blogId)
            {
                return $blog;
            }
        }
    }
}