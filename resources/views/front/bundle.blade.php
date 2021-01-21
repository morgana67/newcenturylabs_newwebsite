@extends('layouts.site')
@section('title'){{ 'Bundle' }}@endsection
@section('description'){{'Bundle'}}@endsection
@section('keywords'){{'Bundle'}}@endsection
@section('content')
    <section class="inr-intro-area pt100 pb40">
        <div class="container">
            <div class="page__title text-center mb30">
                <h2>BUNDLE PACKAGE TEST</h2>
                <span></span>
            </div>

            <p>We want you to get the most information about your body when information about “you” matter most. From
                wellness starters to proactive warrior&reg; tests holding over 100 bio markers, you get actionable
                information at your fingertips. You can order bundle tests and add individual tests from our test
                menu</p>
        </div>
    </section>


    <section class="packages-area bg-snow p30 mb30 box-scale--hover">
        <div class="container">
            <?php
            $thHead = "";
            $thPrice = "";
            $thBody = "";
            foreach ($model as $product) {

            if ($product->sale_price != null)
                $price = $product->sale_price;
            else
                $price = $product->price;


            $thHead .= "<th>" . $product->name . "</th>";
            $thPrice .= "<th>$" . floatval($price) . "</th>";
            ?>
            <div class="pack-box col-sm-3 ">
                <div clsas="pack__hed">
                    <h4><?php echo $product->name; ?></h4>
                    <h2>
                        @if($product->sale_price !=  null)
                            <span id="old_price" style="text-decoration: line-through;">${{ $product->price }}</span>
                            <span id="price">${{ $product->sale_price }}</span>
                        @else
                            <span id="price">${{ $product->price }}</span>
                        @endif
                    </h2>
                    <div class="rating-area clrlist">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="cont">
                    <p>{!! $product->description  !!} </p>
                    <div class="lnk-btn inline-btns">
                        <a href="javascript:void(0);"
                           onclick="AddToCart('<?php echo $product->id ?>', '<?php echo $price ?>');">Add to Cart</a>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </section>
    <section class="table-area0 pack-table pt30 pb30 table-valign a--hidden">
        <div class="container">

            <div class="table-responsive">

                <table class="table table-hover">
                    <thead>
                    <th>Category</th>
                    <th>Bio Markers</th>
                    {!! $thHead !!}
                    </thead>
                    <tr>
                        <th></th>
                        <th></th>
                        {!! $thPrice !!}
                    </tr>


                    <?php
                    foreach ($categories as $id => $category) {
                    if (empty($category['categories'])) {
                        continue;
                    }
                    ?>
                    <tr>
                        <td colspan="<?php echo count($model) + 2; ?>"><?php echo $category['name']; ?></td>
                    </tr>
                    <?php
                        foreach ($category['categories'] as $subCatId => $subCategory) {
                    ?>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td><?php echo $subCategory; ?></td>

                        <?php
                        foreach ($model as $product) {
                            if (isset($productCategories[$product->id]) && in_array($subCatId, $productCategories[$product->id])) {
                                $class = "check";
                            } else {
                                $class = "times";
                            }
                        ?>
                        <td><i class="fa fa-<?php echo $class; ?>"></i></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                </table>

            </div>

        </div>
    </section>
@endsection
