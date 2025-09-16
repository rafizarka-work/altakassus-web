 <!-- Blog Section Starts -->
 <section class="blog">
     <!-- Container Starts -->
     <div class="container">
         <!-- Main Heading Starts -->
         <div class="text-center top-text">
             <h1><span>{{ __($ns . '.blogs.title') }}</span></h1>
             <h4>{{ __($ns . '.blogs.subtitle') }}</h4>
         </div>
         <!-- Main Heading Starts -->
         <!-- Divider Starts -->
         <div class="divider text-center">
             <span class="outer-line"></span>
             <span class="fa fa-comments" aria-hidden="true"></span>
             <span class="outer-line"></span>
         </div>
         <!-- Divider Ends -->
         <div class="row latest-posts-content">
             @php
                 $blogs = Lang::get($ns . '.blogs.items');
             @endphp
             @foreach ($blogs as $blog)
                 <!-- Article Starts -->
                 <div class="col-sm-4 col-md-4 col-xs-12">
                     <div class="latest-post">
                         <!-- Featured Image Starts -->
                         <a class="img-thumb" href="blog-post.html"><img class="img-responsive"
                                 src="http://via.placeholder.com/720x477" alt="img"></a>
                         <!-- Featured Image Ends -->
                         <!-- Article Content Starts -->
                         <div class="post-body">
                             <h4 class="post-title">
                                 <a href="blog-post.html">{{ $blog['title'] }}</a>
                             </h4>
                             <div class="post-text">
                                 <p>{{ $blog['subtitle'] }}</p>
                             </div>
                         </div>
                         <!-- Post Date Starts -->
                         <div class="post-date">
                             <span>18</span>
                             <span>AUG</span>
                         </div>
                         <!-- Post Date Ends -->
                         <a class="custom-button" href="blog-post.html">{{ $blog['label'] }}</a>
                         <!-- Article Content Ends -->
                     </div>
                 </div>
             @endforeach
         </div>
         <!-- Latest Blog Posts Ends -->
     </div>
 </section>
 <!-- Blog Section Ends -->
