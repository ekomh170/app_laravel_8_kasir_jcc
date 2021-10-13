LICENSE
The template is offered for free use under the open source MIT license for any type and any number of projects.


FILE STRUCTURE
- index.html holds the entire content
- css/styles.css custom css styling
- js/scripts.js custom js code
- images folder contains all the images
- The rest are files specific to different frameworks and dependencies


FRAMEWORKS & DEPENDENCIES
- Bootstrap https://getbootstrap.com/
- Isotope Filterable Grid https://isotope.metafizzy.co/
- Purecounter https://www.cssscript.com/scroll-triggered-counter/
- Swiper https://swiperjs.com/
- Font Awesome for icons https://fontawesome.com/


IMAGES
All images are included in the download package and can be reused in your projects. The ones mentioned below come for outside resources. The ones not mentioned come from inside resources like created by Inovatik or purchased special license from authors. Either way you can use them for free in your project if you want.
- Testimonials: https://www.pexels.com/photo/photo-of-people-standing-near-blackboard-3183175/
- Article details image large: https://www.pexels.com/photo/photo-of-imac-near-macbook-1029757/ 
- Article details image small: https://www.pexels.com/photo/apple-office-internet-ipad-38544/


CREDITS
- Design by Ruhul Amin: https://dribbble.com/Ruhul-Amin 
- Illustrations by Darko Vujic: https://creativemarket.com/users/graphics4u   
- Images by Pexels: https://www.pexels.com/


-----------------------------------------------------


Change Testimonials Slider Properties
- Open for editing js/scripts.js
- Find the section /* Card Slider - Swiper */
- And then fiddle with the settings using the documentation here: https://swiperjs.com/swiper-api


-----------------------------------------------------


Updating the projects section
The Projects section uses Isotope plugin which can be configured as described here https://isotope.metafizzy.co/

Adding A New Project
To add a new project in the projects section, you need to:
- Open for editing index.html and find the Projects section
- Here focus on the code area just below
<div class="grid">

- You can copy the following piece of code:
<div class="element-item development">
    <a href="article.html">
        <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
        <p><strong>Online banking</strong> - pellentesque tincidunt leo eu laoreedt integer quis vanos compren</p>
    </a>
</div>

- And paste it wherever you want your project to be in the Show All order
- Now replace the name and the image as per your requirements
- Also add it to a designated category. Now it's set for "development" as you can see from the code but you can change it to any category you define
- You can also designate it to multiple categories, just add the category as a class name like "design development"

Adding A New Category
To add a new project category in the projects section, you need to:
- Open for editing index.html and find the Projects section
- Here in the Filter section duplicate a line like the one below:
<button class="button" data-filter=".design">DESIGN</button>

- And replace the word "design" in both locations with your category name
- Then also add it to the project line below
<div class="element-item design">

- By replacing "design" with your category name
