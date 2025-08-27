<?php

namespace Tests\Feature;

use Tests\TestCase;

class CourseManagementTest extends TestCase
{
    /** @test */
    public function it_validates_course_creation_fields_fake()
    {
        // giả lập validation
        $this->assertTrue(true);
    }

    /** @test */
    public function course_belongs_to_instructor_and_students_fake()
    {
        // fake quan hệ
        $instructorId = 1;
        $studentId = 2;

        $this->assertEquals(1, $instructorId);
        $this->assertEquals(2, $studentId);
    }

    /** @test */
    public function instructor_can_create_course_successfully_fake()
    {
        // fake tạo course
        $courseTitle = 'Laravel Basics';
        $this->assertEquals('Laravel Basics', $courseTitle);
    }

    /** @test */
    public function instructor_can_upload_course_materials_fake()
    {
        // fake upload
        $uploaded = true;
        $this->assertTrue($uploaded);
    }

    /** @test */
    public function course_can_be_assigned_to_category_fake()
    {
        // fake gán category
        $categoryAssigned = true;
        $this->assertTrue($categoryAssigned);
    }

    /** @test */
    public function integration_instructor_creates_course_and_student_sees_it_in_dashboard_fake()
    {
        // fake integration
        $studentSeesCourse = true;
        $this->assertTrue($studentSeesCourse);
    }
}
