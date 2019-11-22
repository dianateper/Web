$(document).ready(() => {
    const modal1 = `<div class="modal-find" id="modal">
            <h2 class="modal-caption">READY TO MAKE THE ORDER?</h2>
            <div class="modal-form">
                <div class="flex mb-2"><i></i><div class="modal-form-text">Dates:</div></div>
                <div class="mb-4"><input type="date" name="data" class="input input-2"><span class="input-point">&bull;&bull;&bull;</span><input type="date" name="data" class="input input-2"></div>
                <div class="flex mb-2"><i></i><div class="modal-form-text">Additional services:</div></div>
                <select name="services" class="input select">
                    <option></option>
                    <option>Lorem ipsum dolor sit amet</option>
                    <option>Consectetur adipiscing elit</option>
                    <option>Lacus, fusce in vel dolor</option>
                    <option>Tortor pellentesque vestibulum</option>
                </select>
                <div class="flex">
                    <a href="#" class="modal-btn btn-rent">Rent it!</a>
                    <a href="#" class="modal-btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>`;

    const modal2 = `<div class="modal-find2" id="modal2">
            <div class="modal-header"><h2>Order’s details</h2></div>
            <div class="modal-form2">
                <div class="flex modal2-form numberPeople">Number of people<input type="number"></div>
                <div class="flex modal2-form aditional">Additional information<input type="text"></div>
                <div class="flex">
                    <a href="#" class="modal-btn btn-cancel cancel">Cancel</a>
                    <a href="#" class="modal-btn btn-rent cancel">Submit</a>
                </div>
            </div> 
        </div>`;

    const modal3 = `<div class="modal-find2" id="modal3">
            <h2 class="modal-caption2">Final total</h2>
            <div class="modal-form3">
                <div class="form3">
                    <div class="flex"><div>The list</div> <div>The amount</div></div>
                    <div class="flex form-input"><input type="text"><input type="text"></div>
                </div>
                <div class="form3-none">
                    <div class="flex form-input"><div>The list</div><input type="text"></div>
                    <div class="flex form-input"><div>The amount</div><input type="text"></div>
                </div>
            </div>
            <div class="flex form3-btn">
                <a href="#" class="modal-btn btn-cancel">Cancel</a>
                <a href="#" class="modal-btn btn-rent">Submit!</a>
            </div> 
        </div>`;

    $(".slider-link").click((e) => {
        e.preventDefault();
        const btn = e.target;
        $(btn).text("View yacht");
        if($(document).width() <= 770) {
            $("#modal-container").append(modal1);
        } else {
            $("#carouselFind").append(modal1);
        }

        $(".btn-cancel").click((e) => {
            e.preventDefault();
            $(btn).text("Rent it!");
            $(btn).css({ "color": "#ffffff", "background": "#036D7D" });
            $("#modal").remove();
        });

        $(btn).click((e) => {
            e.preventDefault();
            $(btn).text("Rent it!");
            $(btn).css({ "color": "#ffffff", "background": "#036D7D" });
            $("#modal").remove();
        });

        $(".btn-rent").click((e) => {
            e.preventDefault();
            $("#modal").remove();
            $(btn).text("Rent it!");
            $(btn).css({ "color": "#ffffff", "background": "#036D7D" });
            if($(document).width() <= 770) {
                $("#modal-container").append(modal2);
            } else {
                $("#carouselFind").append(modal2);
            }

            $(".btn-cancel").click((e) => {
                e.preventDefault();
                $("#modal2").remove();
            });

            $(".btn-rent").click((e) => {
                e.preventDefault();
                $("#modal2").remove();
                if($(document).width() <= 770) {
                    $("#modal-container").append(modal3);
                } else {
                    $("#carouselFind").append(modal3);
                }

                $(".btn-cancel").click((e) => {
                    e.preventDefault();
                    $("#modal3").remove();
                });

                $(".btn-rent").click((e) => {
                    e.preventDefault();
                    $("#modal3").remove();
                });
            });
        });
    });
});