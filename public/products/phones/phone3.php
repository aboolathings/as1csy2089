<?php
session_start();
$pgTitle = 'Phone 2';
require '../layout.php';

?>

<html>
    <main>     
        <h2>Product Page</h2>

			<h3>Product name</h3>
            <img src="..\images\banners\3.jpg" alt="Banner" />
			<h4>Product details</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

			<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>

			<h4>Product reviews</h4>
			<ul class="reviews">
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

					<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


					<div class="details">
						<strong>Reviewer Name</strong>
						<em>10th December 2018</em>
					</div>
				</li>
				<li>
					<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


					<div class="details">
						<strong>Reviewer Name</strong>
						<em>22nd May 2018</em>
					</div>
				</li>

				<li>
					<p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


					<div class="details">
						<strong>Reviewer Name</strong>
						<em>6th November 2018</em>
					</div>
				</li>
			</ul>

			<h5>Have a question left unanswered after reading reviews and existing questions? Ask away:</h5>
			<form action="" method="post">
				<label>Name</label> <input type="text" name="1" />
				<label>Date</label> <input type="date" name="2" />
				<label>Question</label> <textarea></textarea>

				<input type="submit" name="submit" value="submit" />
			</form>
			
		</main>
</html>