import axios from "./base"
export const getCategories = async (page=1) => {
    const respuesta = await axios.get("categories",{
        params:{
            page
        }
    })
    return respuesta.data;

}
