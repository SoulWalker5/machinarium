<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetachMachineFromWorkerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'machineId' => [
                'required',
                'exists:machine_worker,machine_id,worker_id,' . $this->worker->id,
            ],
        ];
    }
}
