class VerifyCompanyUsername {

    constructor() {
        this.minLenght = 5;
    }

    usernameExists(companies, usuarioInputValue) {
        var result;

        for (let i = 0; i < companies.length; i++) {
            const element = companies[i];

            if (element['usuario'] == usuarioInputValue) {
                result = true;
                break;
            } else {
                result = false;
            }
        }

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