<!DOCTYPE html>
<html>
<head>
    <title>Capturing Serenity</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/css/bootstrap.min.css">
    <style>

/* .blogs-container {
  max-width: 800px;
  margin: 0 auto;
  margin-top:100px;
}

.blogs-container h1 {
  font-size: 28px;
  margin-bottom: 20px;
}

.blog {
  margin-bottom: 30px;
}

.blog h2 {
  font-size: 22px;
  margin-bottom: 10px;
}

.blog p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 15px;
}

.blog .author {
  font-size: 14px;
  color: #666;
}

.blog .date {
  font-size: 14px;
  color: #999;
} */

#abcd{
  text-align:center;
  margin-bottom:30px;
  margin-top:80px;
}

.blog-container {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    </style>
</head>
<body>
@extends('header')
    <div class="blogs-container">
    <h1 id="abcd">Capturing Serenity Blogs</h1>
    <div class="container">
    <div class="row">
      
      <div class="col-md-6">
        <div class="blog-container p-4 mb-4">
          <div class="blog">
            <h2>Capturing Moments: The Art of Photography</h2>
            <p>In the world of photography, every click of the shutter is an opportunity to freeze a moment in time, creating a visual masterpiece that tells a story.</p>
            <p>Photography is more than just pointing a camera and pressing a button. It requires a keen eye for detail, a sense of composition, and the ability to capture emotions and beauty in a single frame.</p>
            <p>Through photography, we can explore different perspectives, discover hidden beauty in the ordinary, and share our unique vision with the world.</p>
            <p>Photography allows us to preserve memories, immortalize fleeting moments, and create a tangible representation of our experiences and emotions.</p>
            <div class="author"><em class="text-muted">Written by John Doe</em></div>
            <div class="date"><em class="text-muted">Published on May 1, 2023</em></div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="blog-container p-4 mb-4">
          <div class="blog">
            <h2>Exploring the World Through the Lens: The Magic of Photography</h2>
            <p>Photography is a remarkable medium that allows us to embark on a visual journey, discovering the wonders of the world and preserving them for generations to come.</p>
            <p>With a camera in hand, we can capture breathtaking landscapes, vibrant cityscapes, and intimate moments that evoke a range of emotions.</p>
            <p>Photography enables us to freeze time, immortalizing fleeting expressions, candid interactions, and the beauty of the natural world.</p>
            <p>Through the lens, we see the world with a new perspective, noticing intricate details, patterns, and colors that often go unnoticed in our busy lives.</p>
            <div class="author"><em class="text-muted">Written by Jane Smith</em></div>
            <div class="date"><em class="text-muted">Published on May 5, 2023</em></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
  <div class="blog-container p-4 mb-4">
    <div class="blog">
      <h2>The Rhythm of Life: The Beauty of Music</h2>
      <p>Music is a universal language that transcends barriers and touches the depths of our souls.</p>
      <p>From the soothing melodies of classical compositions to the energizing beats of modern tunes, music has the power to evoke emotions and create lasting memories.</p>
      <p>Through music, we can express our joy, sorrow, love, and longing. It has the ability to transport us to different times and places, allowing us to escape reality or embrace it fully.</p>
      <p>Whether we are listening, singing, or playing an instrument, music enriches our lives and brings people together in harmonious unity.</p>
      <div class="author"><em class="text-muted">Written by Michael Anderson</em></div>
      <div class="date"><em class="text-muted">Published on June 15, 2023</em></div>
    </div>
  </div>
</div>
      <div class="col-md-6">
  <div class="blog-container p-4 mb-4">
    <div class="blog">
      <h2>The Power of Words: The Art of Writing</h2>
      <p>Writing is a captivating art form that allows us to express our thoughts, emotions, and ideas with precision and eloquence.</p>
      <p>Through writing, we can weave intricate stories, create vivid worlds, and inspire others with our words.</p>
      <p>Writing is a journey of self-discovery, as we delve into the depths of our imagination and find our unique voice.</p>
      <p>It is a tool for connection, enabling us to communicate across boundaries and share our experiences with people from different walks of life.</p>
      <div class="author"><em class="text-muted">Written by Sarah Johnson</em></div>
      <div class="date"><em class="text-muted">Published on June 10, 2023</em></div>
    </div>
  </div>
</div>
    </div>
  </div>
    <!-- <div class="blog">
      <h2>Capturing Moments: The Art of Photography</h2>
      <p>In the world of photography, every click of the shutter is an opportunity to freeze a moment in time, creating a visual masterpiece that tells a story.

Photography is more than just pointing a camera and pressing a button. It requires a keen eye for detail, a sense of composition, and the ability to capture emotions and beauty in a single frame.

Through photography, we can explore different perspectives, discover hidden beauty in the ordinary, and share our unique vision with the world.

Photography allows us to preserve memories, immortalize fleeting moments, and create a tangible representation of our experiences and emotions.</p>
      <div class="author">Written by John Doe</div>
      <div class="date">Published on May 1, 2023</div>
    </div>

    <div class="blog">
      <h2>Exploring the World Through the Lens: The Magic of Photography</h2>
      <p>Photography is a remarkable medium that allows us to embark on a visual journey, discovering the wonders of the world and preserving them for generations to come.

With a camera in hand, we can capture breathtaking landscapes, vibrant cityscapes, and intimate moments that evoke a range of emotions.

Photography enables us to freeze time, immortalizing fleeting expressions, candid interactions, and the beauty of the natural world.

Through the lens, we see the world with a new perspective, noticing intricate details, patterns, and colors that often go unnoticed in our busy lives</p>
      <div class="author">Written by Jane Smith</div>
      <div class="date">Published on May 5, 2023</div>
    </div>

    

  </div>
  </div> -->
  @extends('footer')
    
    <script src="https://kit.fontawesome.com/5b7d563147.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
