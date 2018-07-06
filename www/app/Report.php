<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function getUserNameAttribute()
    {
        return $this->user['name'];
    }

    public function getReportTypeNameAttribute()
    {
        return $this->reportType['name'];
    }

    public function getSensorLogSumAttribute()
    {
        return $this->sensorLog['sum'];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reportType()
    {
        return $this->belongsTo(ReportType::class);
    }

    public function sensorLog()
    {
        return $this->belongsTo(SensorLog::class);
    }
}
