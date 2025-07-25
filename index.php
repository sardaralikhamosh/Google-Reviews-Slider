<div class="reviews-section">
  <h2>What Our Customers Say</h2>
  <div class="reviews-slider-container">
    <div class="reviews-slider">
      <!-- Review 1 -->
      <div class="review-card">
        <div class="review-content">
          "Shinisa has completely changed the game for my skincare and haircare routine. Their organic oils are not only incredibly effective but also made with such integrity"
        </div>
        <div class="reviewer-info">
          <div class="reviewer-avatar">
            <img src="https://xsgames.co/randomusers/assets/avatars/male/28.jpg" alt="Sarah J.">
          </div>
          <div class="reviewer-details">
            <div class="reviewer-name">Naveed Hussain</div>
            <div class="review-stars">★★★★★</div>
          </div>
        </div>
      </div>
      
      <!-- Review 2 -->
      <div class="review-card">
        <div class="review-content">
          "I have been using shinisa apricot oil and its results are amazing, i have always wondered how gilgiti people stay younger and healtheir, after discovering apricot oil from organic source i wanted nothing more. Keep up good work. Will be ordering more inshallah."
        </div>
        <div class="reviewer-info">
          <div class="reviewer-avatar">
            <img src="https://i.pravatar.cc/100?img=2" alt="Michael T.">
          </div>
          <div class="reviewer-details">
            <div class="reviewer-name">T Shumaila.</div>
            <div class="review-stars">★★★★☆</div>
          </div>
        </div>
      </div>
      
      <!-- Review 3 -->
      <div class="review-card">
        <div class="review-content">
          "Pure organic apricot oil (multi-functional). Highly recommended."
        </div>
        <div class="reviewer-info">
          <div class="reviewer-avatar">
            <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Priya K.">
          </div>
          <div class="reviewer-details">
            <div class="reviewer-name">Rabia Gilani.</div>
            <div class="review-stars">★★★★★</div>
          </div>
        </div>
      </div>
      
      <!-- Review 4 -->
      <div class="review-card">
        <div class="review-content">
          "Nice product! I’m using it for skincare as recommended by my doctor. It’s truly multifunctional, came in professional packaging, and was delivered on time. Great value for the price."
        </div>
        <div class="reviewer-info">
          <div class="reviewer-avatar">
            <img src="https://i.pravatar.cc/100?img=4" alt="David L.">
          </div>
          <div class="reviewer-details">
            <div class="reviewer-name">Sanna Ullah.</div>
            <div class="review-stars">★★★☆☆</div>
          </div>
        </div>
      </div>
      
      <!-- Review 5 -->
      <div class="review-card">
        <div class="review-content">
          "This apricot oil is genuinely different, light, non-greasy, and feels pure. I use it daily for my face and it has noticeably improved my skin texture. Packaging was clean and delivery was right on time."
        </div>
        <div class="reviewer-info">
          <div class="reviewer-avatar">
            <img src="https://randomuser.me/api/portraits/women/71.jpg">
          </div>
          <div class="reviewer-details">
            <div class="reviewer-name">Yasmeen F.</div>
            <div class="review-stars">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="slider-controls">
    <button class="slider-arrow prev-arrow">❮</button>
    <button class="slider-arrow next-arrow">❯</button>
  </div>
</div>

<style>
.reviews-section {
  padding: 40px 20px;
  background: #f9f9f9;
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
}

.reviews-section h2 {
  margin-bottom: 30px;
  color: #333;
  font-size: 28px;
}

.reviews-slider-container {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.reviews-slider {
  display: flex;
  gap: 20px;
  transition: transform 0.5s ease;
  padding-bottom: 20px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
}

.reviews-slider::-webkit-scrollbar {
  height: 8px;
}

.reviews-slider::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.reviews-slider::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;
}

.reviews-slider::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.review-card {
  min-width: 300px;
  max-width: 350px;
  background: white;
  border-radius: 10px;
  padding: 25px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  scroll-snap-align: start;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.review-content {
  font-style: italic;
  color: #555;
  margin-bottom: 20px;
  line-height: 1.5;
  text-align: left;
}

.reviewer-info {
  display: flex;
  align-items: center;
  gap: 15px;
}

.reviewer-avatar img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
}

.reviewer-details {
  text-align: left;
}

.reviewer-name {
  font-weight: bold;
  color: #333;
  margin-bottom: 5px;
}

.review-stars {
  color: #FFA41C;
  font-size: 18px;
  letter-spacing: 2px;
}

.slider-controls {
  margin-top: 20px;
}

.slider-arrow {
  background: #2cccd2;
  border: none;
  font-size: 16px;
  cursor: pointer;
  color: white;
  padding: 5px 10px;
  margin: 0 5px;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s;
}

.slider-arrow:hover {
  background: #25a8ad;
}

@media (max-width: 768px) {
  .review-card {
    min-width: 280px;
  }
  
  .reviews-slider {
    gap: 15px;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.reviews-slider');
  const prevBtn = document.querySelector('.prev-arrow');
  const nextBtn = document.querySelector('.next-arrow');
  
  // Calculate scroll amount (width of one card + gap)
  const card = document.querySelector('.review-card');
  const cardWidth = card.offsetWidth;
  const gap = 20;
  const scrollAmount = cardWidth + gap;
  
  // Auto-slide variables
  let autoSlideInterval;
  const autoSlideDelay = 3000; // 3 seconds
  
  // Initialize auto-slide
  function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
      if (slider.scrollLeft >= (slider.scrollWidth - slider.clientWidth - 1)) {
        // If at end, scroll back to start
        slider.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
        // Otherwise scroll to next card
        slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      }
    }, autoSlideDelay);
  }
  
  // Pause auto-slide when hovering
  slider.addEventListener('mouseenter', () => {
    clearInterval(autoSlideInterval);
  });
  
  // Resume auto-slide when not hovering
  slider.addEventListener('mouseleave', () => {
    startAutoSlide();
  });
  
  // Manual navigation
  prevBtn.addEventListener('click', () => {
    clearInterval(autoSlideInterval);
    slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    startAutoSlide();
  });
  
  nextBtn.addEventListener('click', () => {
    clearInterval(autoSlideInterval);
    slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    startAutoSlide();
  });
  
  // Hide arrows when at extremes
  const checkArrows = () => {
    prevBtn.style.visibility = slider.scrollLeft <= 0 ? 'hidden' : 'visible';
    nextBtn.style.visibility = slider.scrollLeft >= (slider.scrollWidth - slider.clientWidth - 1) ? 'hidden' : 'visible';
  };
  
  slider.addEventListener('scroll', checkArrows);
  checkArrows(); // Initial check
  
  // Start auto-slide
  startAutoSlide();
});
</script>