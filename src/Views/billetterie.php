<div x-data="{
        prices: { child: 35, adult: 50, pass: 350 },
        quantities: { child: 0, adult: 0, pass: 0 },
        get total() {
            return (this.quantities.child * this.prices.child) +
                (this.quantities.adult * this.prices.adult) +
                (this.quantities.pass * this.prices.pass);
        }
    }">


    <div class="main-img"></div>

    <section class="form-section">
        <h2>Réservez vos billets</h2>
        <form action="/create_ticket_buy" method="post">
            <label for="visit_date">Date de réservation:</label>
            <input type="date" id="visit_date" name="visit_date" required>

            <div class="ticket-block">
                <span>Enfant -17 ans : 35€</span>
                <div class="quantity-controls">
                    <button type="button" @click="quantities.child = Math.max(0, quantities.child - 1)">-</button>
                    <input type="hidden" name="quantities[child]" :value="quantities.child">
                    <input type="number" x-model="quantities.child" min="0">
                    <button type="button" @click="quantities.child++">+</button>
                </div>
            </div>

            <div class="ticket-block">
                <span>Adulte +18ans: 50€</span>
                <div class="quantity-controls">
                    <button type="button" @click="quantities.adult = Math.max(0, quantities.adult - 1)">-</button>
                    <input type="hidden" name="quantities[adult]" :value="quantities.adult">
                    <input type="number" x-model="quantities.adult" min="0">
                    <button type="button" @click="quantities.adult++">+</button>
                </div>
            </div>

            <div class="ticket-block">
                <span>Pass Alfredo - 1 an : 350€</span>
                <div class="quantity-controls">
                    <button type="button" @click="quantities.pass = Math.max(0, quantities.pass - 1)">-</button>
                    <input type="hidden" name="quantities[pass]" :value="quantities.pass">
                    <input type="number" x-model="quantities.pass" min="0">
                    <button type="button" @click="quantities.pass++">+</button>
                </div>
            </div>

            <div class="total">Total: <span x-text="total"></span>€</div>
            <button type="submit">Soumettre</button>
        </form>
    </section>
</div>