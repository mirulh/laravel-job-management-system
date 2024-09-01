<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA method

    // step1: Arrange
    $employer = Employer::factory()->create();
    // 'it' in this example belongs to a job therefore we need to define job variable
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // step2: Act & step3: Assert
    expect($job->employer->is($employer))->toBeTrue();

});

it('can have tags', function() {

    // arrange
    $job = Job::factory()->create();

    // using function tag
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
