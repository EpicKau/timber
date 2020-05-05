<?php

/**
 * @group called-post-constructor
 * @group terms-api
 */
class TestTimberPages extends Timber_UnitTestCase {

	function testTimberPostOnCategoryPage() {
		$post_id = $this->factory->post->create();
		$category_id = $this->factory->term->create(array('taxonomy' => 'category', 'name' => 'News'));
		$cat = Timber::get_term($category_id);
		$this->go_to($cat->path());
		$term = Timber::get_term();
		$this->assertEquals($category_id, $term->ID);
		$post = Timber\Timber::get_post();
		$this->assertEquals(0, $post->ID);
	}



}
