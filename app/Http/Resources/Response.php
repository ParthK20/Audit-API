<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Response extends JsonResource
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
          'id' => $this->response_id,
          'formId' => $this->typeform_id,
          'calculated' => $this->calculated,
          'scores' => $this->scores,
          'questions' => $this->questions,
          'answers' => $this->answers,
          'createdDate' => $this->created_at
        ];
    }

    public function with($request) {
      return [
        'version' => '1.0.0',
        'author_url' => url('http://audit.tmrwppl.com')
      ];
    }
}
