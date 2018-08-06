<?php include "includes/header.php"?>

        <!-- START LEFT COL -->
<section>
 <h2 class="pageID">Flexbox</h2>
        <p>Flexbox is a set of CSS tools used to control the appearance of items within a container tag based at varying display sizes.  It allows the developer to set general rules for how to handle common breakpoints instead of writing and having to maintain numerous media queries that might alter frequently as content is added or edited.  Below is a set of CSS code for a container tag and its child to demonstrate some of the options available using flexbox:</p>
        <pre>
.container{
    	display: flex | inline-flex;
 /*Establishes the flexbox and determines if it will be block or inline*/
    	flex-direction: row | row-reverse | column | column-reverse;
/*Rows display content horizontally left to right or reversed.  Columns display vertically top to bottom or reversed.*/
    	flex-wrap: nowrap | wrap | wrap-reverse;
/*By default, flex items try to fit on one line, but this can be used to allow them to wrap.*/
    	justify-content: flex-start | flex-end | center | space-between | space-around | space-evenly;
/*Defines alignment along the main axis, which will differ depending on if it is a row or a column*/
    	align-items: flex-start | flex-end | center | baseline | stretch;
 /*Defines alignment along the cross axis*/
    	align-content: flex-start | flex-end | center | space-between | space-around | stretch;
/*Only applies if there are multiple rows or columns at the main axis and defines their alignment to one another*/
}
.item{
    	order: &lt;integer&gt;;
/*Default is zero.  Controls the order in which items appear with the lowest number taking the most precedence*/
    	flex-basis: &lt;length&gt; | auto;
/*Used to define the flexible width or height of a flex item.  It can be set as a percentage, em, or auto.  There are several other options for this rule, but they are not recommended because support varies between browsers*/
    	flex-grow: &lt;number&gt;;
/*As the flexbox expands, this defines the order and relative rate of expansion.  An item with a flex-grow set to 2 will double before an item set to 1 starts to expand, from there they will grow proportionately*/
    	flex-shrink: &lt;number&gt;;
/*The inverse property to flex-grow*/
    	flex: [&lt;flex-grow number&gt; &lt;flex-shrink number&gt;? || &lt;flex-basis length&gt;]
/*This is a shorthand for the above three rules.  It is recommended to use this shorthand instead of the separate rules, because it better handles potential conflict between the parameters*/
    	align-self: auto | flex-start | flex-end | center | baseline | stretch;
/*Can be used to deviate from the alignment choice applied to the parent*/
}
        </pre>
        <p>Flexbox has browser support issues.  It has gone through 3 different versions, an old version from 2009, an in-between version from 2011, and the current syntax.  Browsers released after 2013 support the newest syntax, but older browsers may require vender prefixing.  One quick solution is to write the code in the newest syntax and then run it through the autoprefixer available at https://github.com/postcss/autoprefixer.  If you prefer to write out the code yourself, CSS-Tricks provides a decent article on how to apply the different syntax, (<a href="https://css-tricks.com/using-flexbox/">CSS-Tricks</a>). </p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Works Cited</h3>
    <ol>
    <li>Baltimora (User Name). “Basic Concepts of Flexbox.” MDN Web Docs, 12 Apr. 2018, <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a>.</li>
    <li>Coyier, Chris. “Using Flexbox: Mixing Old and New for the Best Browser Support.” CSS-Tricks, 15 June 2013, <a href="https://css-tricks.com/using-flexbox/">https://css-tricks.com/using-flexbox/</a>.</li>
    <li>Coyier, Chris. “A Complete Guide to Flexbox.” CSS-Tricks, 23 Apr. 2018, <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a>.</li>
    <li>Gillenwater, Zoe. “Putting Flexbox into Practice.” LinkedIn SlideShare, 8 Sept. 2013, <a href="https://www.slideshare.net/zomigi/putting-flexbox-into-practice">https://www.slideshare.net/zomigi/putting-flexbox-into-practice</a>.</li>
    <li>Smith, Greg. “Dive into Flexbox - Design, Tools and Workflow - Bocoup.” RSS, 13 Dec. 2012, <a href="https://bocoup.com/blog/dive-into-flexbox">https://bocoup.com/blog/dive-into-flexbox</a>.</li>
    </ol>
</aside>
<!-- END RIGHT COL -->    

<?php include "includes/footer.php"?>