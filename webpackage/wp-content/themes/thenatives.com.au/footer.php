		</div>
		<footer id="footer">
            <div class="footer-main">
                <div class="container">
                    <?php if(!is_404()): ?>
                    <div class="bgFooter">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="footerTitle">
                                    <h3>let’s be friends fill in your deets so we can keep you in the loop</h3>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="footerForm">
                                    <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="logo-footer">
                        <img src="<?php echo THEME_IMAGES; ?>/logo-footer.png">
                    </div>
                </div>
            </div>
		</footer>
	</div>
    <?php wp_footer(); ?>
</body>
</html>