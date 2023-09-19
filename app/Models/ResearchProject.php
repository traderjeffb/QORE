<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchProject extends Model
{
    protected $table = 'research_projects';
    protected $fillable = [
        'title',
        'description',
        'startDate',
        'endDate',
        'principal_investigator',
        'project_team',
        'research_objectives',
        'research_questions',
        'methodology',
        'data_collection',
        'data_analysis',
        'budget',
        'currency',
        'country',
        'risk_assessment',
        'timeline',
        'resources',
        'project_deliverables',
        'communication_plan',
        'approval_process',
        'references',
        'additional_notes',
        'attachments',
        'status',
    ];
}
