

<html>
<head>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="creature.css">

</head>

<center>
<h1 style="color:white;" > Welcome TO OUR WEBSITE<img src="" alt=""></h1><br></center>
    <center><p>
        
        <h2 style="color:white;"> SELECT THE TYPE OF LOGIN YOU WANT</h2>


        <br>
        <center>
        
    <button class="button"><a href="loginform.php" style="text-decoration:none;color:white  "> CYBER POLICE LOGIN</a></button>
    <button class="button"><a href="\DBNS\index.php" style="text-decoration:none;color:white;">civillian login</a></button>


</center>

<!-- <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="programmingfans" data-description="feedback on the website" data-message="" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script> -->

</center>
<center>
<!-- <div class="creature">
		<div></div>	
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>	
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div></center> -->

    <!-- <template> -->
  <div>
    <!-- 💨 -->
  </div>
</template>

<!-- <script>
export default{
  methods: {
    initializePixi() {
      // Initialize app
      const app = new PIXI.Application({
        background: 0x000000,
        height: window.innerHeight,
        resizeTo: window,
        width: window.innerWidth
      })
      
      // Add the view to the DOM
      document.body.appendChild(app.view)
      
      // Initialize smoke container
      const smokeContainer = new PIXI.Container()
      
      // Add smoke container to main container
      app.stage.addChild(smokeContainer)      
      
      // Interval
      setInterval(() => {
        // Initialize smoke sprite
        const smokeSprite = PIXI.Sprite.from('https://assets.codepen.io/141041/smokeSprite.png')

        // Anchor smoke sprite to middle
        smokeSprite.anchor.set(0.5)
        
        // Calculate scale
        let scale = window.innerWidth / 256 * 0.75
        
        // Scale smoke sprite
        smokeSprite.scale.set(scale, scale)
        
        // Rotate sprite
        smokeSprite.rotation = Math.random() * Math.PI * 2

        // Position smoke sprite
        smokeSprite.x = _.random(-256 * scale, window.innerWidth)
        smokeSprite.y = window.innerHeight + 256 * scale
        
        // Randomize starting alpha
        smokeSprite.alpha = Math.random()

        // Add sprite to container
        smokeContainer.addChild(smokeSprite)

        // Animate smoke
        gsap.to(smokeSprite, {
          duration: 5,
          alpha: 0,
          x: `+=${256*scale}`,
          y: `random(0, ${window.innerHeight})`,
          onComplete: () => {
            // Destroy sprite
            smokeSprite.destroy()
            
          }
        })
        
      }, 50)
      
    }
  },
  mounted() {
    // Initialize pixi
    this.initializePixi()
    
  }
}
</script>

<style>
</style> -->

</body>
    
    </p>
</html>