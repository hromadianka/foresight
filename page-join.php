<?php
/*
Template Name: Долучитись до опитування
*/
?>

<?php get_header(); ?>

<style>
	label {
		margin-right: 12px;
	}
	
	.question {
		margin-bottom: 15px;
	}
	
	.question::nth-last-child {
		margin-bottom: 0;
	}
</style>

<h2>Долучитись до опитування</h2>

<div class="question">
	<p>Запитання з балами</p>
	<input type="radio" value="1" id="1" name="question1">
	<label for="1">1</label>
	<input type="radio" value="2" id="2" name="question2">
	<label for="2">2</label>
	<input type="radio" value="3" id="3" name="question3">
	<label for="3">3</label>
	<input type="radio" value="4" id="4" name="question4">
	<label for="4">4</label>
	<input type="radio" value="5" id="5" name="question5">
	<label for="5">5</label>
</div>

<div class="question">
	<p>Запитання з текстом</p>
	<textarea></textarea>
</div>

<?php get_footer(); ?>