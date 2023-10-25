<?php
/**
 * Template Name: Услуги
 *
 * @package djun
 */

get_header(); ?>

	<main class="relative overflow-hidden mb-[200px]">
		<?php djun_breadcrumbs(); ?>
		<div class="px-5 mt-2">
			<div class="max-w-huge mx-auto">
				<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded">
					<?php the_title(); ?>
				</h1>
				<?php if ( have_rows( 'slajder' ) ) : ?>
					<div class="md:mt-12 mt-10 services-slider">
						<div class="">
							<?php
							while ( have_rows( 'slajder' ) ) :
								the_row();
								?>
								<div class="md:mr-8 mr-2.5 md:pt-8 pt-4 pb-8 px-8 bg-white rounded-25 h-auto md:max-w-[605px] max-w-[280px]">
									<div class="md:flex items-center gap-x-8">
										<?php $djun_kartinka = get_sub_field( 'kartinka' ); ?>
										<?php if ( $djun_kartinka ) : ?>
											<img src="<?php echo esc_url( $djun_kartinka['url'] ); ?>"
												 width="120"
												 height="120"
												 class="block md:mb-0 mb-4 md:w-30 md:h-30 w-20 h-20"
												 alt="<?php echo esc_attr( $djun_kartinka['alt'] ); ?>"/>
										<?php endif; ?>
										<div class="font-unbounded md:text-pure-text-pc text-xs">
											<?php the_sub_field( 'tekst' ); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="relative z-30 max-w-huge mx-auto w-full flex items-end justify-between mt-8">
							<div class="services-slider-pagination flex gap-x-5.5"></div>

							<div class="md:flex hidden items-center gap-x-12">
								<svg width="22" height="39" class="services-slider-button-prev cursor-pointer"
									 viewBox="0 0 22 39" fill="none"
									 xmlns="http://www.w3.org/2000/svg">
									<path d="M19 3L3 19.5L19 36" stroke="#666666" stroke-width="5"
										  stroke-linecap="round"
										  stroke-linejoin="round"/>
								</svg>

								<svg class="services-slider-button-next cursor-pointer" width="22" height="39"
									 viewBox="0 0 22 39" fill="none"
									 xmlns="http://www.w3.org/2000/svg">
									<path d="M3 3L19 19.5L3 36" stroke="#666666" stroke-width="5" stroke-linecap="round"
										  stroke-linejoin="round"/>
								</svg>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="md:mt-14 mt-16" id="services-tabs">
					<div class="flex items-center w-full justify-between gap-x-8 md:mb-16 mb-11.5 overflow-x-auto">
						<?php
						$djun_tabs = [
							[
								'desktop' => 'Абонементы на посещение',
								'mob' => 'Абонементы',
							],
							[
								'desktop' => 'Дополнительные услуги',
								'mob' => 'Доп. услуги',
							],
							[
								'desktop' => 'Летний лагерь',
								'mob' => 'Летний лагерь',
							],
						];
						$djun_tabs_count = count( $djun_tabs );
						?>
						<?php for ( $djun_i = 0; $djun_i < $djun_tabs_count; $djun_i++ ) : ?>
							<p class="transition-all duration-300 font-unbounded xl:text-heading-3-pc md:text-pure-text-pc text-sm pb-3 relative cursor-pointer whitespace-nowrap <?php echo esc_attr( 0 === $djun_i ? 'active' : '' ); ?>"
							   data-tab-id="<?php echo esc_attr( $djun_i + 1 ); ?>">
								<span class="lg:block hidden"><?php echo esc_html( $djun_tabs[ $djun_i ]['desktop'] ); ?></span>
								<span class="lg:hidden block"><?php echo esc_html( $djun_tabs[ $djun_i ]['mob'] ); ?></span>
								<span class="absolute w-full hidden bg-ochre left-0 bottom-0 top-auto h-1 rounded-full tab-decor"></span>
							</p>
						<?php endfor; ?>
					</div>

					<div class="tabs-content">
						<div class="gap-8 md:grid-cols-2 hidden active" data-tab="1">
							<?php if ( have_rows( 'abonementy' ) ) : ?>
								<?php
								while ( have_rows( 'abonementy' ) ) :
									the_row();
									?>

									<?php if ( have_rows( 'prodlennyj_den' ) ) : ?>
										<?php
										while ( have_rows( 'prodlennyj_den' ) ) :
											the_row();
											?>
											<div class="grid xl:grid-cols-[400px_auto] md:col-span-full items-end gap-x-5 xl:pt-10 pt-8 xl:pb-12 pb-8 xl:px-12 px-8 bg-white rounded-25">
												<div class="">
													<p class="md:font-unbounded md:font-bold  font-extrabold xl:text-heading-2-pc md:text-heading-4-pc text-heading-3-pc md:mb-2 mb-4">
														Продленный день
													</p>
													<div class="md:flex items-center gap-x-2 justify-between xl:w-auto md:w-[380px] xl:mb-0 mb-6">
														<p class="md:font-extrabold md:text-pure-text-pc text-sm md:mb-0 mb-1">
															<?php the_sub_field( 'primechanie' ); ?>
														</p>
														<p class="md:text-pure-text-pc text-sm xl:pr-5">
															<?php the_sub_field( 'vremennoj_promezhutok' ); ?>
														</p>
													</div>
												</div>
												<?php if ( have_rows( 'tarify' ) ) : ?>
													<div class="grid md:grid-cols-5 grid-cols-2 xl:gap-x-7.5 gap-x-4 gap-y-4">
														<?php
														while ( have_rows( 'tarify' ) ) :
															the_row();
															?>
															<div class="">
																<p class="mb-1 text-grey-900 text-sm">
																	<?php the_sub_field( 'kolichestvo_poseshhenij' ); ?>
																	&nbsp;посещение
																</p>
																<p class="font-unbounded font-medium xl:text-heading-4-pc text-pure-text-pc">
																	<?php the_sub_field( 'czena' ); ?>&nbsp;₽
																</p>
															</div>
														<?php endwhile; ?>
													</div>
												<?php endif; ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'nepolnyj_den' ) ) : ?>
										<?php
										while ( have_rows( 'nepolnyj_den' ) ) :
											the_row();
											?>
											<div class="grid xl:grid-cols-[400px_auto] md:col-span-full items-end gap-x-5 xl:pt-10 pt-8 xl:pb-12 pb-8 xl:px-12 px-8 bg-white rounded-25">
												<div class="">
													<p class="md:font-unbounded md:font-bold  font-extrabold xl:text-heading-2-pc md:text-heading-4-pc text-heading-3-pc md:mb-2 mb-4">
														Неполный день
													</p>
													<div class="md:flex items-center gap-x-2 justify-between xl:w-auto md:w-[380px] xl:mb-0 mb-6">
														<p class="md:font-extrabold md:text-pure-text-pc text-sm md:mb-0 mb-1">
															<?php the_sub_field( 'primechanie' ); ?>
														</p>
													</div>
												</div>
												<?php if ( have_rows( 'tarify' ) ) : ?>
													<div class="grid md:grid-cols-5 grid-cols-2 xl:gap-x-7.5 gap-x-4 gap-y-4">
														<?php
														while ( have_rows( 'tarify' ) ) :
															the_row();
															?>
															<div class="">
																<p class="mb-1 text-grey-900 text-sm">
																	<?php the_sub_field( 'kolichestvo_poseshhenij' ); ?>
																	&nbsp;посещение
																</p>
																<p class="font-unbounded font-medium xl:text-heading-4-pc text-pure-text-pc">
																	<?php the_sub_field( 'czena' ); ?>&nbsp;₽
																</p>
															</div>
														<?php endwhile; ?>
													</div>
												<?php endif; ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'korotkij_den' ) ) : ?>
										<?php
										while ( have_rows( 'korotkij_den' ) ) :
											the_row();
											?>
											<div class="grid xl:grid-cols-[400px_auto] md:col-span-full items-end gap-x-5 xl:pt-10 pt-8 xl:pb-12 pb-8 xl:px-12 px-8 bg-white rounded-25">
												<div class="">
													<p class="md:font-unbounded md:font-bold  font-extrabold xl:text-heading-2-pc md:text-heading-4-pc text-heading-3-pc md:mb-2 mb-4">
														Короткий день
													</p>
													<div class="md:flex items-center gap-x-2 justify-between xl:w-auto md:w-[380px]">
														<p class="md:font-extrabold md:text-pure-text-pc text-sm md:mb-0 mb-1">
															<?php the_sub_field( 'primechanie_1' ); ?>
														</p>
														<p class="md:text-pure-text-pc text-sm xl:pr-5">
															<?php the_sub_field( 'vremennoj_promezhutok_1' ); ?>
														</p>
													</div>
													<div class="md:flex items-center gap-x-2 justify-between xl:w-auto md:w-[380px] xl:mb-0 mb-6">
														<p class="md:text-pure-text-pc text-sm">
															<?php the_sub_field( 'primechanie_2' ); ?>
														</p>
														<p class="md:text-pure-text-pc text-sm xl:pr-5">
															<?php the_sub_field( 'vremennoj_promezhutok_2' ); ?>
														</p>
													</div>
												</div>
												<?php if ( have_rows( 'tarify' ) ) : ?>
													<div class="grid md:grid-cols-5 grid-cols-2 xl:gap-x-7.5 gap-x-4 gap-y-4">
														<?php
														while ( have_rows( 'tarify' ) ) :
															the_row();
															?>
															<div class="">
																<p class="mb-1 text-grey-900 text-sm">
																	<?php the_sub_field( 'kolichestvo_poseshhenij' ); ?>
																	&nbsp;посещение
																</p>
																<p class="font-unbounded font-medium xl:text-heading-4-pc text-pure-text-pc">
																	<?php the_sub_field( 'czena' ); ?>&nbsp;₽
																</p>
															</div>
														<?php endwhile; ?>
													</div>
												<?php endif; ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'pochasovaya_oplata' ) ) : ?>
										<?php
										while ( have_rows( 'pochasovaya_oplata' ) ) :
											the_row();
											?>
											<div class="md:pt-10 pt-8 md:pb-12 pb-8 md:px-12 px-8 bg-white rounded-25 flex flex-col justify-between">
												<p class="md:font-unbounded md:font-bold  font-extrabold xl:text-heading-2-pc md:text-heading-4-pc text-heading-3-pc md:mb-2 mb-4">
													Почасовая оплата
												</p>
												<div class="md:flex items-end gap-x-2 justify-between">
													<p class="md:text-heading-4-pc text-sm md:font-extrabold md:mb-0 mb-6">
														<?php the_sub_field( 'primechanie' ); ?>
													</p>
													<p class="md:text-heading-4-pc text-pure-text-pc md:font-extrabold font-medium whitespace-nowrap md:font-manrope font-unbounded">
														<?php the_sub_field( 'czena' ); ?>
													</p>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'vstupitelnyj_vznos' ) ) : ?>
										<?php
										while ( have_rows( 'vstupitelnyj_vznos' ) ) :
											the_row();
											?>
											<div class="md:pt-10 pt-8 md:pb-12 pb-8 md:px-12 px-8 bg-white rounded-25 flex flex-col justify-between">
												<p class="md:font-unbounded md:font-bold  font-extrabold xl:text-heading-2-pc md:text-heading-4-pc text-heading-3-pc md:mb-2 mb-4">
													Вступительный взнос
												</p>
												<div class="md:flex items-end gap-x-2 justify-between">
													<p class="md:text-heading-4-pc text-sm md:font-extrabold md:mb-0 mb-6">
														<?php the_sub_field( 'primechanie' ); ?>
													</p>
													<p class="md:text-heading-4-pc text-pure-text-pc md:font-extrabold font-medium whitespace-nowrap md:font-manrope font-unbounded">
														<?php the_sub_field( 'czena' ); ?>
													</p>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="gap-y-4 hidden" data-tab="2">
							<?php if ( have_rows( 'dopolnitelnye_uslugi' ) ) : ?>
								<?php
								while ( have_rows( 'dopolnitelnye_uslugi' ) ) :
									the_row();
									?>
									<div class="grid xl:grid-cols-[275px_auto] items-center gap-x-12 gap-y-4 md:py-8 py-4 px-8 bg-white rounded-25">
										<p class="md:font-unbounded md:font-bold font-extrabold md:text-heading-4-pc text-pure-text-pc">
											<?php
											$djun_nazvanie_uslugi = get_sub_field( 'nazvanie_uslugi' );
											echo wp_kses_post( djun_format_string( $djun_nazvanie_uslugi ) );
											?>
										</p>
										<div class="grid md:grid-cols-6 lg:gap-x-9.5 gap-x-2">
											<div class="md:block grid grid-cols-[161px_auto] gap-x-2 md:pb-0 pb-4">
												<?php $djun_dopustimyj_vozrast = get_sub_field( 'dopustimyj_vozrast' ); ?>
												<?php if ( $djun_dopustimyj_vozrast ) : ?>
													<p class="md:mb-1 md:text-grey-900 text-sm whitespace-nowrap md:font-normal font-extrabold">Возраст</p>
													<p class="md:font-unbounded md:font-medium font-extrabold xl:text-heading-4-pc md:text-pure-text-pc text-sm whitespace-nowrap">
														<?php echo esc_html( $djun_dopustimyj_vozrast ); ?>
													</p>
												<?php endif; ?>
											</div>
											<div class="md:block grid grid-cols-[161px_auto] gap-x-2">
												<?php $djun_dlitelnost = get_sub_field( 'dlitelnost' ); ?>
												<?php if ( $djun_dlitelnost ) : ?>
													<p class="md:mb-1 text-grey-900 text-sm whitespace-nowrap">
														Длительность
													</p>
													<p class="md:font-unbounded md:font-medium xl:text-heading-4-pc md:text-pure-text-pc text-sm whitespace-nowrap">
														<?php echo esc_html( $djun_dlitelnost ); ?>
													</p>
												<?php endif; ?>
											</div>
											<div class="md:block grid grid-cols-[161px_auto] gap-x-2">
												<?php $djun_czena_za_probnoe_zanyatie = get_sub_field( 'czena_za_probnoe_zanyatie' ); ?>
												<?php if ( $djun_czena_za_probnoe_zanyatie ) : ?>
													<p class="md:mb-1 text-grey-900 text-sm whitespace-nowrap">
														Пробное занятие
													</p>
													<p class="md:font-unbounded md:font-medium xl:text-heading-4-pc md:text-pure-text-pc text-sm whitespace-nowrap">
														<?php echo esc_html( djun_format_price( $djun_czena_za_probnoe_zanyatie ) ); ?>
													</p>
												<?php endif; ?>
											</div>
											<div class="md:block grid grid-cols-[161px_auto] gap-x-2">
												<?php $djun_czena_za_razovoe_zanyatie = get_sub_field( 'czena_za_razovoe_zanyatie' ); ?>
												<?php if ( $djun_czena_za_razovoe_zanyatie ) : ?>
													<p class="md:mb-1 text-grey-900 text-sm whitespace-nowrap">
														Разовое занятие
													</p>
													<p class="md:font-unbounded md:font-medium xl:text-heading-4-pc md:text-pure-text-pc text-sm whitespace-nowrap">
														<?php echo esc_html( djun_format_price( $djun_czena_za_razovoe_zanyatie ) ); ?>
													</p>
												<?php endif; ?>
											</div>
											<div class="md:block grid grid-cols-[161px_auto] gap-x-2">
												<?php $djun_czena_za_4_zanyatiya = get_sub_field( 'czena_za_4_zanyatiya' ); ?>
												<?php if ( $djun_czena_za_4_zanyatiya ) : ?>
													<p class="md:mb-1 text-grey-900 text-sm whitespace-nowrap">
														4 занятия
													</p>
													<p class="md:font-unbounded md:font-medium xl:text-heading-4-pc md:text-pure-text-pc text-sm whitespace-nowrap">
														<?php echo esc_html( djun_format_price( $djun_czena_za_4_zanyatiya ) ); ?>
													</p>
												<?php endif; ?>
											</div>
											<div class="md:block grid grid-cols-[161px_auto] gap-x-2">
												<?php $djun_czena_za_mesyacz = get_sub_field( 'czena_za_mesyacz' ); ?>
												<?php if ( $djun_czena_za_mesyacz ) : ?>
													<p class="md:mb-1 text-grey-900 text-sm whitespace-nowrap">Меяц</p>
													<p class="md:font-unbounded md:font-medium xl:text-heading-4-pc md:text-pure-text-pc text-sm whitespace-nowrap">
														<?php echo esc_html( djun_format_price( $djun_czena_za_mesyacz ) ); ?>
													</p>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="gap-y-8 hidden" data-tab="3">
							<?php if ( have_rows( 'letnij_lager' ) ) : ?>
								<?php
								while ( have_rows( 'letnij_lager' ) ) :
									the_row();
									?>
									<div class="md:flex items-center w-full justify-between bg-white rounded-25 md:pt-10 pt-8 md:px-12 px-8 md:pb-12 pb-8">
										<p class="md:font-unbounded md:font-bold font-extrabold xl:text-heading-2-pc text-heading-3-pc md:mb-0 mb-2">
											<?php the_sub_field( 'nazvanie' ); ?>
										</p>
										<p class="md:font-extrabold md:text-pure-text-pc text-sm md:mb-0 mb-6">
											<?php the_sub_field( 'primechanie' ); ?>
										</p>
										<p class="font-unbounded font-medium xl:text-[40px] leading-[1.4] md:text-heading-3-pc text-[30px]">
											<?php
											$djun_czena = get_sub_field( 'czena' );
											echo esc_html( djun_format_price( $djun_czena ) );
											?>
										</p>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>

<?php
get_footer();

/**
 * Format string.
 *
 * @param string $input_string string to format.
 * @return string
 */
function djun_format_string( string $input_string ): string {
	$pattern = '/\(([^)]+)\)/u';
	$replacement = '<br class="xl:block hidden"><span class="font-normal">$1</span>';

	return preg_replace( $pattern, $replacement, $input_string );
}

/**
 * Format price value.
 *
 * @param int|string $number price to format.
 * @return string
 */
function djun_format_price( $number ): string {
	return number_format( $number, 0, ',', ' ' ) . ' ₽';
}
