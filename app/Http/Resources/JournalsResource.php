<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JournalsResource extends JsonResource
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
            'description' => $this->description,
            'sample_image_path' => $this->sample_image_path,
            'publishing_date' => $this->publishing_date,
            'publishing_fee' => $this->publishing_fee,
            'frequency' => $this->frequency,
            'guidelines' => $this->guidelines,
            'payment_policy' => $this->payment_policy,
            'loyality_reward' => $this->loyality_reward,
            'paperpublication' => $this->paperpublication,
            'plagiarism' => $this->plagiarism,
            'academic_misconduct' => $this->academic_misconduct,
            'layout' => $this->layout,
        ];
    }
}
