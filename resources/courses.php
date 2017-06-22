<div id="courses">
<?php $courses = ITRS\CourseAgenda::getRawAvailableCourses(); ?>
<?php if (!empty($courses)): ?>
    <?php foreach ($courses as $index => $course): ?>
        <div class="course">
            <div class="course-image"></div>
            <div class="course-name"><?php echo $course->name; ?></div>
            <div class="course-description"><?php echo $course->description; ?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>