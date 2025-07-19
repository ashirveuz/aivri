@extends('website.layouts.app')
@section('content')
    <section class="common-section delivery-address">
        <div class="width-container">
            <div class="delivery-address-in">
                <div class="row justify-content-center">

                    <div class="col-md-9 delivery-form-out">
                        <div class="address-head">
                            <h5>All Address</h5>
                        </div>
                        <form id="addressForm" novalidate>
                            <!-- Personal Information -->
                            <div class="row mb-4">
                                <div class="delivery-form-head">
                                    <h5><i class="fas fa-user"></i> Personal Information</h5>
                                </div>
                                <div class="col-md-6 mb-3 floating-label">
                                    <label for="name" class="form-label required">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" maxlength="255"
                                        placeholder="Enter full name" required>
                                </div>
                                <div class="col-md-6 mb-3 floating-label">
                                    <label for="phone_number" class="form-label required">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                        maxlength="10" placeholder="Enter phone number" pattern="[0-9]{10}" required>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="row mb-4">
                                <div class="delivery-form-head">
                                    <h5><i class="fas fa-home"></i> Address Details</h5>
                                </div>
                                <div class="col-12 mb-3 floating-label">
                                    <label for="address_line1" class="form-label required">Address Line 1</label>
                                    <input type="text" class="form-control" id="address_line1" name="address_line1"
                                        maxlength="255" placeholder="Enter address1" required>
                                    <div class="form-text">Flat/House No., Building, Apartment</div>
                                </div>
                                <div class="col-12 mb-3 floating-label">
                                    <label for="address_line2" class="form-label">Address Line 2</label>
                                    <input type="text" class="form-control" id="address_line2" name="address_line2"
                                        placeholder="Enter address2" maxlength="255">
                                    <div class="form-text">Area, Street, Sector, Village</div>
                                </div>
                                <div class="col-12 mb-3 floating-label">
                                    <label for="landmark" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="landmark" name="landmark"
                                        placeholder="Enter landmark" maxlength="255">
                                    <div class="form-text">Nearby landmark (optional)</div>
                                </div>
                            </div>

                            <!-- Location Information -->
                            <div class="row mb-4">
                                <div class="delivery-form-head">
                                    <h5><i class="fa-solid fa-location-dot"></i> Location Details</h5>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label required">City</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="district" class="form-label required">District</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label required">State</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pincode" class="form-label required">Pincode</label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" maxlength="6"
                                        placeholder="Enter pin code" pattern="[0-9]{6}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Default Address Option -->
                            <div class="default-address">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="is_default" name="is_default">
                                    <label class="form-check-label" for="is_default">
                                        <strong>Set as default address</strong>
                                    </label>
                                    <div class="form-text">This address will be used as your default delivery address</div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn main-btn">
                                    Save Address
                                </button>
                            </div>
                        </form>

                        <div class="add-new-address">
                            <h6>Add New Address</h6>
                            <button class="btn btn main-btn">Add New</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
