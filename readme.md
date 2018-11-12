# Alphad-Doctors

Laravel Medical Consulta Project


## Usage:

### Views

#### layouts

we use three master layouts with 1-2-3 col and
left-middle-right sections   

#### Shared Data 

shared data variables you can use across any view
shared view located at Providers\AppServiceProvider

locations => Utilities\Location::locations()
specializations => Utilities\Specialization::all()

### Utilities

Http\Utilities

#### Location

Location return array of locations

#### Specializations

Specialization return array of medical specializations
