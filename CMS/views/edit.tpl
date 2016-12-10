<div class="article">
    <section class="section-boven">
        <article>
            <div class="content"><br>

      <form  method="POST">
         <label for="name">School:</label>
         <input type="text" name="name" id="name" value="{$result.0.name}">
<!--          <input type="text" name="streetname" value="{$result.0.streetname}"> -->
         <label for="streetname">Streetname:</label>
         <input type="text" name="streetname" id="streetname" value="{$result.0.streetname}">

         <label for="streetnumber">Streetnumber:</label>
         <input type="text" name="streetnumber" id="streetnumber" value="{$result.0.streetnumber}">

         <label for="zipcode">Zipcode:</label>
         <input type="text" name="zipcode" id="zipcode" value="{$result.0.zipcode}">

         <label for="district">District:</label>
         <input type="text" name="district" id="district" value="{$result.0.district}">

         <label for="telnr">Telnr:</label>
         <input type="text" name="telnr" id="telnr" value="{$result.0.telnr}">

         <label for="email">Email:</label>
         <input type="text" name="email" id="email" value="{$result.0.email}">

         <label for="website">Website:</label>
         <input type="text" name="website" id="website" value="{$result.0.website}">

         <label for="openday">Openday:</label>
         <input type="text" name="openday" id="openday" value="{$result.0.openday}">

         <label for="infonight">Infonight:</label>
         <input type="text" name="infonight" id="infonight" value="{$result.0.infonight}">

         <label for="openclass">Openclass:</label>
         <input type="text" name="openclass" id="openclass" value="{$result.0.openclass}">

         <label for="concept">Concept:</label>
         <input type="text" name="concept" id="concept" value="{$result.0.concept}">
         <input type="submit" name="submit_update"><br><br>
      </form>

         </div>
      </article>
   </section>
</div>