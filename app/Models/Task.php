<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'priority',
        'due_date',
        'details',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    /**
     * Get the CSS classes for the priority badge.
     */
    public function getPriorityColorAttribute(): string
    {
        return match (strtolower($this->priority)) {
            'high' => 'bg-error-container text-on-error-container',
            'medium' => 'bg-surface-container-high text-on-surface-variant',
            'low' => 'bg-surface-container-low text-on-primary-container',
            default => 'bg-surface-container text-on-surface-variant',
        };
    }
}
