<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LibraryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'abstract' => $this->abstract,
            'keywords' => $this->keywords,
            'category' => $this->category->title,
            'authors_name' => $this->authors_name,
            'authors_email' => $this->authors_email,
            'address' => $this->address,
            'country' => $this->country,
            'status' => $this->status,
            'organisation' => $this->organisation,
            'mobile' => $this->mobile,
            'viewers_name' => $this->viewers_name,
            'viewers_email' => $this->viewers_email,
            'total_words' => $this->total_words,
        ];
    }
}
