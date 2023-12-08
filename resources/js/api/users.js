import axios from "./base"
export const getUsers = async (page=1, amount = 10) => {
    const respuesta = await axios.get("users",{
        params:{
            page,
            amount
        }
    })
    return respuesta.data;

}
export const getUser = async (id) => {
    const respuesta = await axios.get("users/"+id,{

    })
    return respuesta.data.data;
}

export const addUser = async (data) => {
    const respuesta = await axios.post("users/",{
        ...data

    })
    return respuesta.data.data;
}

export const updateUser = async (id,data) => {
    const respuesta = await axios.patch("users/"+id,{
        ...data

    })
    return respuesta.data.data;
}

export const deleteUser = async (id) => {
    const respuesta = await axios.delete("users/"+id,{


    })
    return respuesta.data.data;
}
