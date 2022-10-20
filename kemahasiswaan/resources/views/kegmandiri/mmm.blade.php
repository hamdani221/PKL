<select class="js-states browser-default select2" name="shopping_id" required id="shopping_id">
        <option value="option_select" disabled selected>Shoppings</option>
        @foreach($shoppings as $shopping)
            <option value="{{ $shopping->id }}" {{$company->shopping_id == $shopping->id  ? 'selected' : ''}}>{{ $shopping->fantasyname}}</option>
        @endforeach
    </select>