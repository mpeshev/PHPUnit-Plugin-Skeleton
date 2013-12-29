<?php

class WP_Test_CPTs extends WP_UnitTestCase {
	
	public function testCorrectSetup() {
		$this->assertTrue( true );
	}
	
	public function testPostCPTExists() {
		$post_cpt_exists = post_type_exists( 'post' );
		$this->assertTrue( $post_cpt_exists );
	}
}
