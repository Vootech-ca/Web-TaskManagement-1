<?php


namespace App\Traits;


use Carbon\Carbon;

trait FormatDates
{
    protected $newDateFormat = 'Y-m-d H:i:s A';
    protected $onlyDateFormat = 'Y-m-d';

    // convert the UTC format to my format
    public function getCreatedAtAttribute($date): string
    {
        return Carbon::parse($date)->format($this->newDateFormat);
    }

    // convert the UTC format to my format
    public function getUpdatedAtAttribute($date): string
    {
        return Carbon::parse($date)->format($this->newDateFormat);
    }

    // convert the UTC format to my format
    public function getDeletedAtAttribute($date): string
    {
        return Carbon::parse($date)->format($this->newDateFormat);
    }

    public function scopeGetByDate($query, $from = null, $to = null, $column = 'created_at') {
        if(!$from || !$to) {
            return $query->where(function ($q) use ($column){
                $q->whereBetween($column, [date('Y-m-d') . ' 00:00:00', date('Y-m-d') . ' 23:59:59']);
            });
        }
        return $query->where(function ($q) use ($from, $to, $column){
            $q->whereBetween($column, [$from . ' 00:00:00', $to . ' 23:59:59']);
        });
    }
}
