<template>
    <div class="container">

      <form>

        <div class="form-group"> <!-- Name field -->
          <label class="control-label " for="name">Rasident Name / Nom du résident</label>
          <input class="form-control" id="name" name="name" type="text"/>
        </div>

        <div class="form-group"> <!-- Email field -->
          <label class="control-label requiredField" for="submission-date">Claim Submission Date / Date de la demande<span class="asteriskField">*</span></label>
          <input class="form-control" value ="today()"id="submission-date" name="submission-date" type="date"/>
        </div>
        <input class="datepicker" data-date-format="mm/dd/yyyy">
        <div class="form-group"> <!-- Subject field -->
          <label class="control-label " for="block-number">Block Number / Numéro de bloc</label>
          <!--<input class="form-control" id="block-number" name="block-number" type="select"/>-->
          <select v-model="block.selected">
              <option v-for="option in block.options" v-bind:value="option.value">
                {{ option.text }}
              </option>
          </select>
          <span>Selected: {{ block.selected }}</span>
        </div>

        <div class="form-group"> <!-- Message field -->
          <label class="control-label " for="service-name">MTD Service Name / Nom du service</label>
          <input class="form-control" cols="40" id="service-name" name="service-name" type="select"></input>
        </div>

        <div class="form-group"> <!-- Message field -->
          <label class="control-label " for="site-name">MTD Site Name / Nom du site</label>
          <input class="form-control" cols="40" id="site-name" name="site-name" type="select"></input>
        </div>
        <div class="form-group"> <!-- Message field -->
          <label class="control-label " for="claim-date">Claim Date / Date de réclamation</label>
          <input class="form-control" id="claim-date" name="claim-date" type="date"></input>
        </div>
        <div class="form-group"> <!-- Message field -->
          <label class="control-label " for="claim-type">Claim Type / Type de réclamation</label>
          <input class="form-control" id="claim-date" name="claim-date" type="select"></input>
        </div>
        <div class="form-group"> <!-- Message field -->
          <label class="control-label " for="claim-type">Earning Code / Code de rénumération</label>
          <input class="form-control" id="claim-date" name="claim-date" type="date"></input>
        </div>

        <div class="form-group">
          <button class="btn btn-primary " name="submit" type="submit">Submit</button>
        </div>

      </form>
    </div>
</template>

<script>
    export default {


    }
</script>
