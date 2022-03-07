<?php
/* Template Name: Task */
?>

<?php get_header('custom'); ?>
    <div class="task">
        <div class="task__top">
            <div class="task__top__box container">
                <h1>Lorem ipsum dolor sit amet</h1>
                <h3>Lorem ipsum dolor sit amet</h3>
            </div>
        </div>
        <div class="task__content container">
            <div class="numbers">
                <div class="numbers__single numbers__single--three">
                    <div class="numbers__single__content">
                        <p>Lorem <b>ipsum</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <span>1</span>
                    </div>
                </div>
                <div class="numbers__single numbers__single--three numbers__single--center">
                    <div class="numbers__single__content">
                        <p>Lorem <b>ipsum</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <span>3</span>
                    </div>
                </div>
                <div class="numbers__single numbers__single--three numbers__single--right">
                    <div class="numbers__single__content">
                        <p>Lorem <b>ipsum</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <span>5</span>
                    </div>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() .'/src/images/graph.png'; ?>" alt="graph" />
                <div class="numbers__single numbers__single--two numbers__single--right">
                    <div class="numbers__single__content">
                        <p>Lorem <b>ipsum</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        <span>2</span>
                    </div>
                    </div>
                <div class="numbers__single numbers__single--two">
                    <div class="numbers__single__content">
                        <p>Lorem <b>ipsum</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        <span>4</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer('custom'); ?>
