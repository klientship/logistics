<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Shipment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     parent::toArray($request),
        //     'packages' => PackageResource::collection($this->package)
        // ];

        // return [
        //     'id' => $this->id,
        //     'date'=> $this->date,
        //     'delivery_address'=> $this->delivery_address,
        //     'sender_name' => $this->sender->name,
        //     'sender_address' => $this->sender->address,
        //     'current_status' => $this->status->status,
        //     'docket_no' => $this->docket_no,
        //     'sender_id' => $this->sender->id
        //   ];
    }
}
