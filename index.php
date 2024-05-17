<html>
    <head>
        <title>Home Page</title>
        <style>
            .initialParagraph {
                color: red;
                font-size: 30px;
            }

            .specialPinkParagraph {
               color: pink; 
            }

            p {
                color:blueviolet;
            }

            p {
                color: green;
            }

            .Div1{
                width:300px;
                background-color: lightblue;
            }
            .Div2{
                width:50%;
                background-color: lightpink;
            }
            
            @media screen and (max-width: 600px) {
                .Div1{
                    background-color:blue;
                }

                .Div2{
                    background-color: pink;
                }
            }

            @media screen and (min-width: 900px){
                .Div1{
                    font-size: 30px;
                }
            }
        </style>
        <meta name="viewport" content="width=device-width">
    </head>
        <h1 style="font-size: 15px;">This is the heading 1</h1>
        <h2>there is a heading 2 woah</h2>
        <marquee><a href="https://csszengarden.com/">It's Eva beibi</a></marquee>
        <p class="initialParagraph">
            Lorem Ipsum is simply dummy text of the printing and typesetting 
            industry.
        </p>
            <div style="background-color: burlywood;">
                Lorem Ipsum has been the industry's standard dummy text
            </div>
        <p class="specialPinkParagraph">
             ever since the 1500s, when an unknown printer took a galley of 
             type and scrambled it to make a type specimen book.
        </p>
             <span style="background-color: yellow;">It has survived </span>
        <p>
             not only five centuries, but also the leap into 
             electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
             software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <a href="https://www.linkedin.com/in/eva-j-33b5b2bb/" target="_blank">LinkedIn</a>
        <br/>
        <br/>
        <br/>

        <div class="Div1">
            This is my div
        </div>

        <span style="background-color: green">This is a silly little span</span>
        <!--This is a comment hahahaha-->
        <!-- Apply here! -->

        <strong>HELLO WORLD</strong>
        
    </body>
</html>