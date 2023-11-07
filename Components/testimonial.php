<section id="testimonial" class="testimonial section-padding pb-3">
	<div class="container">
		<div class="heading text-center">
			<h2>Get My University Videos</h2>
		</div>
		<div class="video_reviews">
			<div class="row">
				<?php
				$conn = mysqli_connect("localhost", "root", "", "collegs");

				$query = "SELECT * FROM `university_videos`";

				$result = mysqli_query($conn, $query);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>

						<div class="col-md-3 col-6 rvBox">

							<div class="videoBox">
								<a class="videoPlayBtn" href="<?php echo $row['video_link'] ?>"><img
										src="data:image/jpeg;base64,<?php echo base64_encode($row['video_thumbnail']); ?>"
										width="867" height="603" alt="" /></a>
								<h3>
									<?php echo $row['video_heading'] ?>
								</h3>
							</div>

						</div>
						<?php
					}
				}
				?>

			</div>
		</div>


	</div>
</section>