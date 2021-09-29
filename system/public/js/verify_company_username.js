class VerifyCompanyUsername {

    constructor() {
        this.minLenght = 5;
    }

    usernameExists(companies, usuarioInputValue) {

        var result;

        companies.forEach(element => {
            if (element['usuario'] == usuarioInputValue) {
                result = true;
            } else {
                result = false;
            }
        })

        return result;
    }

    usernameTooShort(usuarioInput) {

        var result;

        if ($(usuarioInput).val().length < this.minLenght) {
            result = true;
        } else {
            result = false;
        }

        return result;
    }

}