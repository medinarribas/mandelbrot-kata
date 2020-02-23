<?php

namespace Tests\Mandelbrot;

use Complex\Complex;

class ComplexNumberShould extends BaseTestClass {
    /** @test */
    public function should_be_equal_if_they_have_the_same_real_and_imaginary_parts() {
        $c1 = new Complex(-2, 1);
        $c2 = new Complex(-2, 1);

        $this->assertEquals($c1, $c2);
    }

    /** @test */
    public function should_be_equal_if_they_have_the_same_real_and_imaginary_parts_but_is_not_true_for_imaginary_part_equals_0() {
        $c1 = new Complex(-2, 0, '');
        $c2 = new Complex(-2, 0, 'i');

        $this->assertNotEquals($c1, $c2);
    }

    /** @test */
    public function should_be_equal_if_they_have_the_same_real_and_imaginary_parts_with_imaginary_part() {
        $c1 = new Complex(-2, 1);
        $c2 = new Complex(-2, 1);

        $this->assertEquals($c1, $c2);
    }
}